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
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>SummaryAI</title>
</head>
<body>
    <header class="header">
        <span class="logo">SummaryAI</span>
        <nav class="nav nav--hidden">
          <ul class="nav__container">
             <li class="nav__item"><a class="nav__link" href="/frequent">Frequent questions</a></li>
             <li class="nav__item"><a class="nav__link" href="/privacy">Privacy</a></li>
          </ul>
        </nav>
    </header>
    <div class="content">
        <h1 class="title">
            Transform long texts <br/>
            into concise summaries instantly.
        </h1>
        <div class="container--inputs">
            <!-- User input -->
            <div class="inputbox">
                <div contenteditable="true" class="inputbox__input" id="sumaryInput"></div>
                <button class="btn btn--primary" id="summarize">summarize</button>
            </div>
            
            <div class="inputbox">
                <div  class="inputbox__input inputbox__input--summary" id="summaryResult"></div>
                <button class="btn" id="copy">
                    <img src="{{asset('images/copy.svg')}}" class="btn-icon" >
                </button>
            </div>
        </div>
        <div class="container-twitter">
        <a class="twitter-follow-button" href="https://twitter.com/BryantScript" target="__blank"> Follow @BryantScript</a>
        </div>
        <footer class="footer">
        <nav class="nav">
          <ul class="nav__container">
            <li class="nav__item"><a class="nav__link" href="/frequent">Frequent questions</a></li>
            <li class="nav__item"><a class="nav__link" href="/privacy">Privacy</a></li>
          </ul>
        </nav>
        </footer>
    </div>
    <script src="js/scripts.js"></script>
</body>
</html>