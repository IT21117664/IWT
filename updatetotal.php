<?php
    session_start();
    require('config.php');
    if (isset($_REQUEST['IID']) && isset($_REQUEST['link']) ){
        $IID = $_REQUEST['IID'];
        $link = 
        $sqlupdateviews = "UPDATE `inventory` SET `totalView`='[value-9]',`totalDownload`='[value-10]' WHERE `IID`=";
    }
?>