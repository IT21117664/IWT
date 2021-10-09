<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


        <?php
                function logIn() {
        
            echo' <div class="topRight">
                    <form method="POST" action="Login.php">
                    <input type="email"placeholder="E-mail" id="index_pg_mail" name="index_pg_mail">
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

    <center><h2 p class="pop-titel">REQUEST NEW BOOKS</h2></center>

            <div>  

					<table class="pop-table Memdel">
                    <form  method="post">
                        <tr>
							<td>
								<label>Book Name</label>
                            </td>
                            <td colspan="3">
                                <input type="text" class="pop-retbar membar"  name="Book_Name" size="93" value="">
                            </td>
                        </tr>

                        <tr>
							<td>
								<label>Auther</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Author" size="30" value="">     
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>Publisher</label> 
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                            E-Book <input type="radio" name="yes" checked>Yes</input> <input type="radio" name="no">No</input>
                            </td>
                        </tr>

            <div>
            <input type="reset" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-clear" value="Clear">
            
            
            </div>



    

     <input type="submit" placeholder="Request">

</body>
</html>