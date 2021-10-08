<?php
    require('config.php');
    if(isset($_POST['update'])){
        $mob = $_POST['mob'];
        $userID = $_POST['userID'];
        $address = $_POST['address'];
        $avatar = $_FILES['avatar'];

        //print_r($avatar);

        $target_dir = "./img/avatar/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);

        if(isset($_FILES["avatar"])) {
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file)){
                $sqlUpdateProfile = "UPDATE `user` SET `phoneNumber`='$mob',`profileImg`='$target_file',`Address`='$address' WHERE `userID` = $userID;";
                //echo "The file ". basename( $_FILES["avatar"]["name"]). " is uploaded.";
            } 
            else {
                echo "Error while uploading your file."; 
            }
        }else{
            $sqlUpdateProfile = "UPDATE `user` SET `phoneNumber`='$mob', `Address`='$address' WHERE `userID` = $userID;";
            //echo "File not available"; 
        }

        

    }

?>