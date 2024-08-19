<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .marquee {
        position: relative;
        width: 100%;
        height: 50px;
        overflow: hidden;
    }

    .marquee h3 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: center;
        animation: marquee 5s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
    </style>
</head>

<body>
    <div class="marquee">
        <h3>Hello</h3>
    </div>
</body>

</html>