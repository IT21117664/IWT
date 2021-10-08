<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIIT ONLINE LIBRARY</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/07c9a11431.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</head>
<body>
    <header>
        <div class="slide">
            <div class="slidecaption">
                <img class="mainSlide" src="./img/Slide/1.jpg">
            </div>

            <img class="mainSlide" src="./img/Slide/2.jpg">
            <img class="mainSlide" src="./img/Slide/3.jpg">
        </div>
        
        <div class="topLeft">
            <div>
                <h2 id="date_time"></h2>
                
                
            </div>
        </div>


<<<<<<< HEAD
    <?php
            function logIn() {
                echo' <div class="topRight">
                        <form method="POST" action="Login.php">
                        <input type="email" placeholder="E-mail" id="index_pg_mail" name="index_pg_mail">
                            <input type="password" placeholder="Password" id="index_pg_pwd" name="index_pg_pwd">
                            <button type="submit">Login</button> </br>
                            <a id="fosrget_pwd_link" class="right" href="forget_password.php">forget password</a>
                        </form>
                    </div>';
                    }


            function logOut() {
                echo' <div class="topRight">
                       
                    </div>';
                    }
    <label for="nameWithInitials">$</label>
    ?>
=======
        <?php
                function logIn() {
        
            echo' <div class="topRight">
                    <form method="POST" action="Login.php">
                    <input type="email" placeholder="E-mail" id="index_pg_mail" name="index_pg_mail">
                        <input type="password" placeholder="Password" id="index_pg_pwd" name="index_pg_pwd">
                        <button type="submit">Login</button> </br>
                        <a id="fosrget_pwd_link" class="right" href="forget_password.php">forget password</a>
                    </form>
                </div>';
                }
        ?>
>>>>>>> 1a198e23feaf79ac955a00046559f536896376d3

        <script>
            carousel();
            setInterval(time, 1000);
        </script>

    </header>
