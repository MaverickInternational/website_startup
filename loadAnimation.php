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
            animation-delay: calc(.2s * var(--i))
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
<div class="rotateText">
    <span style="--i:1">M</span>
    <span style="--i:2">A</span>
    <span style="--i:3">V</span>
    <span style="--i:4">E</span>
    <span style="--i:5">R</span>
    <span style="--i:6">I</span>
    <span style="--i:7">C</span>
    <span style="--i:8">K</span>
</div>
</body>
</html>
