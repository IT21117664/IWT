<?php
        include "Header.php";
    ?> 

    <h2 class="pop-titel">
        <center>SLIIT DIGITAL LIBRARY - Forget Password </center>
    </h2>
    
    <hr>

    <!--<img src="./img/logo.png" width="50" height="50" class="logo">-->
    <br><br>

        <div>  

		    <table class="pop-table Memdel">
            <form  method="post" action="checkmail.php">
                <tr>
                    <td>
                    <label class="label">Sliit Email: <input type="text" class="pop-table Memde big" id="Sliit Email" name="Sliit Email"></label>
                    <button type="submit" class="check">Send Mail</button>
                    </td>
                </tr>
            </form>
            </table>    

        </div> <br><br><br><br><br>

        <?php require('footer.php'); ?>
    

    



</body>

</html>