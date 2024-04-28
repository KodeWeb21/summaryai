<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="Transform long texts into concise summaries instantly.">
    <meta name="description" content="Use our advanced AI to generate accurate and fast summaries of any text, optimize your time with our online text summary generator!">
    <meta name="keywords" content="abstract generator, AI, artificial intelligence, automatic summaries, summary tool, online abstracts">
    <meta name="author" content="SummaryAI">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Transform long texts into concise summaries instantly.">
    <meta property="og:description" content="Use our advanced AI to generate accurate and fast summaries of any text, optimize your time with our online text summary generator!">
    <meta property="og:image" content="https://i.imgur.com/cFvLNhX.png">
    <meta property="og:url" content="https://summaryai.dev">
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
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
    <link rel="stylesheet" href="{{ asset('css/styles-demo.css') }}">
    <title>SummaryAI</title>
</head>
<body>
    <header class="header">
        <span class="logo">SummaryAI</span>
        <nav class="nav">
          <ul class="nav__container">
             <li class="nav__item"><a class="nav__link btn-sign" href="/frequent">Sign Up</a></li>
          </ul>
        </nav>
    </header>
    <div class="content">
        <h1 class="title">
            Transform long texts <br/>
            into concise summaries instantly.
        </h1>
       <div class="center-btn">
            <a href="/summary-demo" class=" nav__link btn-try">Try now</a>
       </div>

       <section class="section">
            <div class="section__content">
                <h2 class="section__title">Upload your documents</h2>
                <p class="section__text">upload your pdf files and generate a summary automatically</p>
            </div>
            <img src="images/upload.svg" alt="upload icon" width="300">
       </section>

       <section class="section section--bg">
            <div class="section__content order-1">
                <h2 class="section__title">Generates up to 5,000 words in the summary</h2>
                <p class="section__text">Make long summaries in a simple way.</p>
            </div>
            <img src="images/document.svg"  alt="Document icon" width="300" height="300">
       </section>

       <section class="section">
            <div class="section__content">
                <h2 class="section__title">Access to the chrome extension</h2>
                <p class="section__text">Summarizes what you see with just a few clicks</p>
                <span class="message">coming soon</span>
            </div>
            <img src="images/extension.svg" alt="Extension for Chrome" width="300">
       </section>

       <div class="section section--bg">
            <div class="section__content order-1">
                <h2 class="section__title">Talk to your pdf</h2>
                <p class="section__text">Never get lost while reading a pdf again</p>
            </div>
            <img src="images/comment.svg" alt="comment icon" width="300" height="300">
       </div>

       <div class="section">
            <div class="section__content">
                <h2 class="section__title">You can try it without any commitment</h2>
                <p class="section__text">Enjoy all features free of charge for the first 10 users.</p>
                <a href="" class="nav__link btn-sign mg-top">Sign Up</a>
            </div>
            <img src="images/demo.svg" alt="demo" width="300" height="300px">
       </div>
    </div>
    <footer class="footer-new">
        <span class="footer__message">All features available free of charge for the first 10 users.</span>
        <a href="" class="nav__link btn-sign">Sign Up</a>
    </footer>
    <!-- <script src="js/scripts.js"></script> -->
</body>
</html>