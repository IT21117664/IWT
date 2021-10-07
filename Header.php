<?php session_start(); ?>
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

    <script>
        carousel();
        setInterval(time, 1000);
    </script>

</header>
