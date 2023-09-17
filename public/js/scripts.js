const summaryInput = document.getElementById("sumaryInput");
const summaryResult = document.getElementById("summaryResult");
const summarizeBtn = document.getElementById("summarize");
const copy = document.getElementById("copy")
let copyActive = false;

const showSummary = ({summary}) =>{
    summaryResult.textContent = summary;
}

const destroyMessage = (message) =>{
    setTimeout(()=>{
        message.remove();
        copyActive = false;
    },1000)
}

const messageCopy = () =>{
    if(copyActive) return;
    const message = document.createElement('SPAN');
    message.textContent = "Summary Copied";
    copy.insertAdjacentElement('afterbegin',message);
    copyActive = true;
    destroyMessage(message);
}
summarizeBtn.addEventListener("click",()=>{
    if(summaryInput.textContent.trim() === "") throw new Error("El campo de resumen no puede estar vacio");
    const textSummary = summaryInput.textContent;
    const formData = new FormData();
    formData.append("txt",textSummary);
    summarizeBtn.textContent = "summarizing...";
    summarizeBtn.classList.add("bold");
    fetch("/resume",{
        method: "POST",
        headers:{
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    }).then(response=>response.json())
    .then(data=>{
        showSummary(data)
        summarizeBtn.textContent = "summarize"
        summarizeBtn.classList.remove("bold");
    })
    .catch(error =>{
        console.error("no se pudo realizar el resumen");
        summarizeBtn.textContent = "summarize";
        summarizeBtn.classList.remove("bold");
    })
});

copy.addEventListener("click",async ()=>{
    const textCopy = summaryResult.textContent
    if(textCopy.trim() === "") return
    try{
        await navigator.clipboard.writeText(textCopy);
        messageCopy();
    }catch(error){
        throw new Error("No se pudo copiar el texto al portapapeles");
    }
})