<!doctype html>
<html lang="en">
<head>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .rotateText {
            position: relative;
        }

        .rotateText span {
            position: relative;
            display: inline-block;
            font-size: 5rem;
            color: #19cb07;
            text-transform: uppercase;
            animation: flip 3s infinite;
            animation-delay: calc(.05s * var(--i));
            text-shadow:  2px 2px 5px #035400;
        }

        @keyframes flip {
            0%, 80% {
                transform: rotateY(360deg)
            }
        }

        .css-selector {
            background: linear-gradient(271deg, #1d976c, #93f9b9);
            background-size: 400% 400%;

            -webkit-animation: AnimationName 5.5s ease infinite;
            -moz-animation: AnimationName 5.5s ease infinite;
            -o-animation: AnimationName 5.5s ease infinite;
            animation: AnimationName 5.5s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @-moz-keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @-o-keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @keyframes AnimationName {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>under maintenance</title>
</head>
<body>
<!-- loading Start -->
<div id="spinner" class=" css-selector show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex 
align-items-center justify-content-center flex-column">
    <div class="display-6 font-monospace">
        We are under maintenance
    </div>
    
    <div class="rotateText">
        <span style="--i:1">C</span>
        <span style="--i:2">I</span>
        <span style="--i:3">B</span>
        <span style="--i:4">E</span>
        <span style="--i:5">R</span>
        <span style="--i:6">P</span>
        <span style="--i:7">R</span>
        <span style="--i:8">O</span>
        <span style="--i:9">T</span>
        <span style="--i:10">E</span>
        <span style="--i:11">C</span>
        <span style="--i:12">T</span>
    </div>
</div>
<!-- loading End -->
</body>
</html>