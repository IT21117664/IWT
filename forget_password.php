<?php
        include "Header.php";
        logIn();
    ?> 

    <h2 class="pop-titel">
        <center>SLIIT DIGITAL LIBRARY - Forget Password </center>
    </h2>
    
    <hr>

    <!--<img src="./img/logo.png" width="50" height="50" class="logo">-->
    <br><br>

        <div>  

		    <table class="pop-table Memdel">
            <form  method="post">

                <tr>
                    <td>
                   <label class="" Username : <input type="text" class="pop-table Memdel" id="username" name="username">
                    <button type="submit" class="check">Check</button>
                    </td>
                </tr>
 
                <tr>
                    <td>
                    Sliit Email: <input type="text" class="pop-table Memde" id="Sliit Email" name="Sliit Email">
                    <button type="submit" class="check">Send Mail</button>
                    </td>
                </tr>
            </form>
            </table>    

        </div> <br><br><br><br><br>

        <?php require('footer.php'); ?>
    

    



</body>

</html>