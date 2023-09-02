<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        @font-face {     
            font-family:"Inria Regular"; 
            src: url("{{asset('fonts/InriaSans-Regular.ttf')}}");
        }

        @font-face{
            font-family: "Inria Bold";
            src: url("{{asset('fonts/InriaSans-Bold.ttf')}}")
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>SummaryAI</title>
</head>
<body>
    <header class="header">
        <span class="logo">SummaryAI</span>
    </header>
    <div class="content">
        <h1 class="title">
            Transform long texts <br/>
            into concise summaries instantly.
        </h1>
        <div class="container--inputs">
            <!-- User input -->
            <div class="inputbox">
                <div contenteditable="true" class="inputbox__input"></div>
                <button class="btn btn--primary">summarize</button>
            </div>
            
            <div class="inputbox">
                <div contenteditable="true" class="inputbox__input inputbox__input--summary"></div>
                <button class="btn">
                    <img src="{{asset('images/copy.svg')}}" class="btn-icon" >
                </button>
            </div>
        </div>
    </div>
</body>
</html>