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
            font-size: 20px;
            color: #19cb07;
            text-transform: uppercase;
            animation: flip 3s infinite;
            animation-delay: calc(.05s * var(--i))
        }

        @keyframes flip {
            0%, 80% {
                transform: rotateY(360deg)
            }
        }
    </style>
    <title>Load animation</title>
</head>
<body>
<!-- loading Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
