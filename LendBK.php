<?php
include 'header.php';
require 'config.php';

    $bkCode="";
    $isbn="";
    $authName="";
    $bkname="";

    $memFname="";
    $memLname="";
    $memEmail="";
    $memID="";


    if (isset($_POST['Lend_Book_Member_Find_Id'])){
        $bkCode= $_REQUEST['bkCode'];
        $isbn=$_REQUEST['isbn'];
        $authName=$_REQUEST['authName'];
        $bkname=$_REQUEST['bkname'];
    }

    //$slk=$_POST['Lend_Book_Member_Find_Id'];
    

if (isset($_POST['Lend_Book_Book_Find_Submit'])){
    $indID=$_POST['Lend_Book_Book_Find_Id'];

    $sql_lend = "SELECT inve.IID,inve.Name,auth.authorName,bk.ISBN
    FROM inventory inve, author auth, book bk
    WHERE inve.CID=bk.IID AND inve.A_ID=auth.AID AND inve.IID=$indID";

    $resultBK= $con->query($sql_lend);

    if ($resultBK->num_rows>0){
        while($row=$resultBK->fetch_assoc()){
           $bkname=$row["Name"];
           $isbn=$row["ISBN"];
           $authName=$row["authorName"];
           $bkCode=$row["IID"];
        }
    }
}


if (isset($_POST['Lend_Book_Member_Find_Submit'])){

    $memInput=$_POST['Lend_Book_Member_Find_Id'];


   
     $sql_mem="SELECT userID, FName, LName, email
     FROM user
     WHERE userID=$memInput";

     $resultMem=$con->query($sql_mem);

     if($resultMem->num_rows>0){
         while($row1=$resultMem->fetch_assoc()){
            $memID=$row1["userID"];
            $memFname=$row1["FName"];
            $memEmail=$row1["email"];
            $memLname=$row1["LName"];

         }
     }

     //$lendDate=$_POST['Lend_Book_Member_Table_LendDate'];
     //echo $lendDate;
   //  $dueDate=$_POST['Lend_Book_Member_Table_DueDate'];

} 

if (isset($_POST['lend_button'])){
    $ldte=$_POST['Lend_Book_Member_Table_DueDate'];
    echo $ldte;
    
    
}


?>

<div class="pop-lend">
        <div class="pop-content">
         <div class="pop-close1"><b onclick="closeWindow()">+</b></div>
            <!---------------------------LEND_BOOK_HTML_START------------------------------------------------------------------------------------------------->
            <div>
                <div>
                    <h2 class="pop-titel">LEND BOOK</h2>
                    <div class="pop-topic">
                        <h3><u>Book Details</u></h3>
                        <center>
                           <form  method="post">
                                <input type="text" class="pop-search" name="Lend_Book_Book_Find_Id" placeholder="Search by Code No" size="50" required>
                                <input type="submit" id="Lend_Book_Book_Find_Submit" name="Lend_Book_Book_Find_Submit" class="btn-search" value="Search">
                         </form>
                        </center>
                        <div class="Container">
                            <div class="imgDB">
                                <img src="123.gif" alt="DB Pic" width="120px" height="170px">
                            </div>
                            <div>
                                <table class="pop-table LendBK">
                                  <form method="post">
                                        <tr>
                                            <td>
                                                <label>Book Name</label>
                                            </td>
                                            <td>
                                                <input type="text"  name="Lend_Book_Tabel_Name" class="pop-retbar lendbar" placeholder="Book Name" size="30" value="<?php echo $bkname ?>"  readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Author</label>
                                            </td>
                                            <td>
                                                <input type="text"  name="Lend_Book_Tabel_Author" class="pop-retbar lendbar" placeholder="Book's Author" size="30" value="<?php echo $authName ?>"  readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>ISBN No</label>
                                            </td>
                                            <td>
                                                <input type="text"  name="Lend_Book_Tabel_ISBN" class="pop-retbar lendbar" placeholder="Book's ISBN" size="30" value="<?php echo $isbn ?>"  readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Code No</label>
                                            </td>
                                            <td>
                                                <input type="text"  name="Lend_Book_Tabel_Code" class="pop-retbar lendbar" placeholder="Book's Code" size="30" value="<?php echo $bkCode ?>"  readonly>
                                            </td>
                                        </tr>
                                 </form> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-----------------------------Member Details----------------------------------------------------------------------------------------------->
                <div>
                    <div class="pop-topic">
                        <h3><u>Member Details</u></h3>
                        <center>
                         <form method="post" action="LendBK.php?<?php echo "bkname=$bkname&authName=$authName&isbn=$isbn&bkCode=$bkCode" ?>" > 
                                <input type="text" class="pop-search" name="Lend_Book_Member_Find_Id" placeholder="Reg No / NIC" size="50" required>
                                <input type="submit" id="Lend_Book_Member_Find_Submit" name="Lend_Book_Member_Find_Submit" class="btn-search" value="Search">
                         </form> 
                        </center>
                    </div>
                    <div>
                        <table class="pop-table LendMem">
                     <form method="post"> 
                                <tr>
                                    <td>
                                        <Label>First Name</Label>
                                    </td>
                                    <td>
                                        <input type="text"  name="Lend_Book_Member_Table_Fname" class="pop-retbar membar" value="<?php echo $memFname ?>" readonly>
                                    </td>
                                    <td>
                                        <Label>Last Name</Label>
                                    </td>
                                    <td>
                                        <input type="text"  name="Lend_Book_Member_Table_Fname" class="pop-retbar membar" value="<?php echo $memLname ?>" readonly>
                                    </td>
                                </tr>

                                <br> <br>
                                <tr>
                                    <td>
                                    <Label>Reg No</Label>
                                    </td>
                                    <td>
                                    <input type="text" name="Lend_Book_Member_Table_RegNo" class="pop-retbar membar" value="<?php echo $memID ?>" readonly>
                                    </td>
                                    <td>
                                    <Label>Email</Label>
                                    </td>
                                    <td>
                                    <input type=" email"  name="Lend_Book_Member_Table_Email" class="pop-retbar membar" value="<?php echo $memEmail ?>" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <Label>Lend Date</Label>
                                    </td>
                                    <td><input type="date" id="Lend_Book_Member_Table_LendDate"  name="Lend_Book_Member_Table_LendDate" class="pop-retbar membar" value="Today"  readonly></td>
                                    <td>
                                    <Label>Due Date</Label>
                                    </td>
                                    <td><input type="date" id="Lend_Book_Member_Table_DueDate"  name="Lend_Book_Member_Table_DueDate" class="pop-retbar membar" min="Today" required></td>
                                </tr>
                     </table> 

                    </div>
                </div>

                <!-----------------------------Lend Button----------------------------------------------------------------------------------------------->

                <div>

                    <input type="text" name="bkcd"  value="<?php echo $bkCode ?>">
                    <input type="text" name="memcd"  value="<?php echo $memID ?>" >
                    <input type="text" name="ledate"  value="<?php echo  $lendDate ?>">
                    <input type="date" name="dudate"  min="Today">

                    <input type="submit" name="lend_button" name="lend_button" class="btn-pop popLend" value="Lend">
                    </form>
                    
                </div>
            </div>
            <!---------------------------LEND_BOOK_HTML_END------------------------------------------------------------------------------------------------->
        </div>
</div>
<script src="./js/main.js"></script>
</body>
</html>