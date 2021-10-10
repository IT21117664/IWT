<?php
 if(isset($_POST['fname'])){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $nameWithInitials = $_POST['nwi'];
        $sliitID = $_POST['regNo'];
        $email = $_POST['email'];
        $dateOfBorth = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $imgLink = $_POST['imgLink'];
        $sliitMail = $_POST['sliitMail'];
        $password = $_POST['pwd'];
        $conform_password = $_POST['confirmPwd'];
        $NIC = $_POST['NIC'];

        if($password == $conform_password){
             $regSql = "INSERT INTO `user`( `FName`, `LName`, `NameWithInitial`, `userID`, `email`, `DateOfBirth`, `phoneNumber`, `Address`, `profileImg`, `Password`, `NIC`) VALUES (\"$fname\", \"$lname\",\"$nwi\", \"$regNo\", \"$email\", \"$dateOfBorth\", \"$mobile\", \"$address\", \"$imgLink\", \"$pwd\", \"$NIC\" )";
             if($con -> query($sqlLoadHistory)){
                header("Location: ./index.php?msg=success");
             }else{
                header("Location: ./index.php?msg=error");
             }
        }

        else{
            echo"
            <script>
            alert('Password does not match');
            </script>";

        }

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/main.css" />
    <script src="./js/main.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
        include "Header.php";
        logIn();
    ?>

            <div class="wrapper">
                <div class="card">
                    <div class="cardDetails">
                        <div class="row">
                            <form method="post" class="form">
                                <div class="personal">
                                    <div>
                                        <h2>Personal Information</h2>
                                    </div>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="input_item">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" id="fname" name="fname" required class="txt input_box" />
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input_item">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" id="lname" name="lname" required class="txt input_box" />
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="input_item">
                                                    <label for="nwi">Name With Initials</label>
                                                    <input type="text" id="nwi" name="nwi" required class="txt input_box" />
                                                </div>
                                            </td>
                                        </tr>

                                        <tr colspan = '2'>
                                            <td>
                                            <div class="input_item">
                                                    <label for="mail">E-mail</label>
                                                    <input type="email" id="email" name="email" onkeyup="mailtyping()" required class="txt input_box" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input_item">
                                                    <label for="regNO">SLIIT Reg No.</label>
                                                    <input type="text" id="regNO" name="regNO" required class="txt input_box" />
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input_item">
                                                    <label for="NIC">NIC No.</label>
                                                    <input type="text" id="NIC" name="NIC" required class="txt input_box" />
                                                </div>
                                            </td>
                                           
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="input_item">
                                                    <label for="dob">Date Of Birth</label>
                                                    <input type="date" id="dob" name="dob" required class="txt input_box" value="Today">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input_item">
                                                    <label for="mobile">Mobile Number</label>
                                                    <input type="text" id="mobile" name="mobile" required class="txt input_box" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr row>
                                            <td colspan="2">
                                                <div class="input_item">
                                                    <label for="address">Address</label>
                                                    <input type="text" id="address" name="address" required class="txt input_box" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input_item">
                                                    <label for="imgLink">Upload Image</label>
                                                    <input type="file" id="imgLink" name="imgLink" />
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="login">
                                    <div>
                                        <h2>Login Details</h2>
                                    </div>

                                    <table>
                                        <tr>
                                            <td colspan="2">
                                                <div class="input_item">
                                                    <label for="sliitMail">SLIIT mail</label>
                                                    <input type="email" id="sliitMail" name="sliitMail" required class="txt input_box" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input_item">
                                                    <label for="pwd">Password</label>
                                                    <input type="password" name="pwd" id="pwd" required class="txt input_box" />
                                                </div>
                                            </td>

                                            <td>
                                                <div class="input_item">
                                                    <label for="conformPwd">Conform Password</label>
                                                    <input type="password" name="conformPwd" id="conformPwd" required class="txt input_box" min="8" max="64" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pwdCheck" id="pwdCheck"></label>
                                            </td>
                                        </tr>
                                    </table>
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

        <script>
            email.addEventListener("keypress", mail_auto);
            pwdCheck.addEventListener("keypress", passwordCheck)
        </script>

        <?php include "Footer.php" ?>
</body>

</html>