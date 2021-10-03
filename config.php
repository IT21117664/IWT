<?php
$con = new mysqli("localhost", "root", "", "lims");

if ($con -> connect_error){
    die("Error" . $con -> connect_error);
    //Connectionr
}
?>