<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIIT ONLINE LIBRARY - ADMIN</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/07c9a11431.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</head>
<body>
    <div class="slide">
        <div class="slidecaption">
            <img class="mainSlide" src="./img/Slide/1.jpg" style="width:100%">
            <div class="topRight">
                <h3>RMB
                <input type="button" value="Button" class="btn primary"></h3>
            </div>

            <div class="topLeft">
                <h3>Time</h3>
            </div>

        </div>
        <img class="mainSlide" src="./img/Slide/2.jpg" style="width:100%">
        <img class="mainSlide" src="./img/Slide/3.jpg" style="width:100%">
    </div>

    <div class="nav">
        <ul>
            <li><a  href="#home">Home</a></li>
            <li><a class="active" href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="right">
            <button type="button" class="btn primary">Overrides</button>
            <i class="far fa-envelope fa-2x"></i>
        </div>
    </div>
    
    <div class="row">
        <div class="center">
            <button type="button" class="btn danger btn-lg">Lend Book</button>
            <button type="button" class="btn warning btn-lg">Retrive Book</button>
        </div>
    </div>

    <div class="row">
        <div class="left">
            <h3 align="left">Member</h3>
            <input type="button" value="New Member Validation" class="btn border colorprimary">
            <input type="button" value="Add Memeber" class="btn border colorprimary">
            <input type="button" value="Member Details" class="btn border colorprimary">
        </div>
    </div>

    <div class="footer">
        <p>Home | </p>
    </div>
    <script> carousel();</script>
</body>
</html>