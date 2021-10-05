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
            <li><a class="logoL">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="column mini">
            <div class="card">
                <img src="./img/avatar/1.jpg" class="searchimg" alt="Avatar" id="avator">
                <div class="cardDetails">
                    <div class="row">
                        <p class="searchResult">
                            Book Name<br>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="column mini">
            <div class="card">
                <img src="./img/avatar/1.jpg" class="searchimg" alt="Avatar" id="avator">
                <div class="cardDetails">
                    <div class="row">
                        <p class="searchResult">
                            Book Name<br>

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <p>E - book | Reports | Journals | Library Police | Contact Us<br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>
</body>
</html>