<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/main.css" />
    <script src="https://kit.fontawesome.com/07c9a11431.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <title>Document</title>
</head>

<body>

<?php include "Header.php"?>

    <div class="wrapper ">
        <div class="column side "></div>
        <div class="column middle ">
            <div class="card ">
                <div class="cardDetails ">
                    <div class="row ">
                        <form action="# " method="post " class="form ">


                            <div class="login">
                                <div>
                                    <h2>Login</h2>
                                </div>

                                <div class="input_item">
                                    <label for="SLIITmail">SLIIT mail</label>
                                    <input type="email" id="SLIITmail" name="SLIITmail" required class="txt input_box"></div>

                                <div class="input_item">
                                    <label for="pwd">Password</label>
                                    <input type="password" name="pwd" id="pwd" required class="txt input_box"></div>
                            </div>

                            <div class="right">
                                <button type="reset" class="btn danger">Clear</button>
                                <button type="submit" class="btn success">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "Footer.php" ?>

</body>

</html>