<?php
    $con=new mysqli("localhost", "root", "", "lims");

    if ($con->connect_error) { 
        header("Location: ./error.php");
    }
?>