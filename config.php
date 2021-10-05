<?php
    $con=mysqli_connect("localhost", "root", "", "lims");
    if(mysqli_connect_errno()){
    header("Location: error.php");
    }
?>