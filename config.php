<?php
    $con=new mysqli("localhost", "root", "", "lims");

    if ($conn->connect_error) { 
        header("Location: error.php");
    }
?>