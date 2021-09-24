<?php
$con = new mysqli("localhost", "root", "", "lms");

if ($con -> connect_error){
    die("Error" . $con -> connect_error);
}
?>