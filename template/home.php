<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
    />
    <title>Document</title>
    <link rel="stylesheet" href="/styles/home.css"/>
    <link rel="styleSheet" href="/styles/homeBackground.css"/>
    <link rel="stylesheet" href="/styles/img/rotation/home-planets-rotation.css"/>
</head>
<body>

<div class="stars"></div>
<div class="twinkl"></div>

<div class="menu">
    <svg width="32" height="32" viewBox="0 0 32 32" class="menu-burger">
        <path d="M5.333 22.667h21.333v-2.667h-21.333v2.667zM5.333 17.333h21.333v-2.667h-21.333v2.667zM5.333 9.333v2.667h21.333v-2.667h-21.333z"></path>
    </svg>
    <div class="menu-navigation">
        <p>Mercury</p>
        <p>Venus</p>
        <p>Earth</p>
        <p>Mars</p>
        <p>Jupiter</p>
        <p>Saturn</p>
        <p>Uranus</p>
        <p>Neptune</p>
    </div>
</div>
<div class="planets-container">
    <img src="" id="sun" alt="Sun"/> <!--La src se lance dans home.js-->
    <div id="mercury"></div>
    <div id="venus"></div>
    <div id="earth"></div>
    <div id="mars"></div>
    <div id="jupiter"></div>
    <div id="saturn"></div>
    <div id="uranus"></div>
    <div id="neptune"></div>
</div>

</body>
<script src="/home.js"></script>
<script src="/menuHome.js"></script>
</html>
