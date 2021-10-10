<?php
    session_start();
    require('config.php');
    if (isset($_REQUEST['IID']) && isset($_REQUEST['link']) ){
        $IID = $_REQUEST['IID'];
        $link = $_REQUEST['link'];
        $sqlupdateviews = "UPDATE `inventory` SET `totalView` = `totalView` + 1 WHERE `IID`= $IID;";

        $sqlupdatedownloads = "UPDATE `inventory` SET `totalDownload` = `totalDownload` + 1 WHERE `IID`= $IID;";

        if ($_REQUEST['type'] == 'read'){
            $con -> query($sqlupdateviews);
        }else{
            $con -> query($sqlupdatedownloads);
        }

        header("Location: $link");


    }

    $con -> close();
?>