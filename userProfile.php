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
            <li><a href="#Library">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
        </ul>
    </div><br>

    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <div class="card">
                <img src="./img/avatar/1.jpg" class="proImg" alt="Avatar" id="avator">
                <div class="cardDetails">
                    <div class="row">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" class="txt formlong" readonly>
                            
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" class="txt formlong" readonly>

                            <label for="nwi">Name With Initial</label>
                            <input type="text" id="nwi" name="nwi" class="txt formlong" readonly>

                            <label for="mob">Mobile Number</label>
                            <input type="text" id="mob" name="mob" class="txt formlong">

                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="txt formlong">

                            <label for="mail">E - mail</label>
                            <input type="email" id="mail" name="mail" class="txt formlong" readonly>

                            <label for="dob">Date Of Birth</label>
                            <input type="date" id="dob" name="dob" class="txt formlong" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p><a href="#" class="footLink">E - book</a> | <a href="#" class="footLink">Reports</a> | <a href="#" class="footLink">Journals</a> | <a href="#" class="footLink">Library</a>Police</a> | <a href="#" class="footLink">Contact Us</a><br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>
</body>
</html>