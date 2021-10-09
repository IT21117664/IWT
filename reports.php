<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reports</title>

    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>

</head>

<body>

    <?php
    require('header1.php');

    if (!isset($_GET["p1"])) {
        $pageno1 = 0;
    } else {
        $pageno1 = $_GET["p1"];
    }

    if (!isset($_GET["p2"])) {
        $pageno2 = 0;
    } else {
        $pageno2 = $_GET["p2"];
    }


    if (!isset($_GET["p3"])) {
        $pageno3 = 0;
    } else {
        $pageno3 = $_GET["p3"];
    }


    ?>

    <div class="nav">
        <ul>
            <li><a class="logoL">Library</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="past_papers.php">Past Papers</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="journals.php">Journals</a></li>
        </ul>
    </div><br>

    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
        <form action="searchResult.php" class="input-container center" method="post">
                <input type="text" class="txtSearch" name="keyWord" placeholder="Search...">
                <input type="submit" name="Search" value="Search" class="btn primary">
        </form>
            <a href="#" class="topRighta">Advanced Search</a>
            <div style="width: 100%;"></div>
        </div>
    </div>



    <div class="card set">
        <div class="card title">
            <h1>New Arrivals</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php

                        if ($pageno1 != 0) {
                        ?>
                            <a href="reports.php?p1=<?php echo $pageno1 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>

                <?php
                require('config.php');


                //if (isset($_REQUEST['IID'])) {
                //$IID = $_REQUEST['IID'];

                $alldatana = "SELECT i.Name, i.itemImgLoc   FROM `report` AS r , `inventory` AS i WHERE i.IID = r.IID ;";
                $alldata = $con->query($alldatana);
                $n_all = $alldata->num_rows;
                $dataar = $alldata->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_data = ceil($n_all / $resultset_per_new_arrivals);



                $offset1 = (int)$pageno1 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `report` AS r , `inventory` AS i WHERE i.IID = r.IID ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset1 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {
                    $numberofrows = $resultSelectBook->num_rows;



                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {



                        $Name = $rowSelectBook['Name'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];


                ?>




                        <div class="card_column">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>





                <?php
                    }
                }

                //}

                //else {
                //  header("Location: ./index.php?error=bookView");
                // }
                ?>
                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php
                        $max = $number_of_data - 1;
                        if ($pageno1 != $max) {
                        ?>
                            <a href="reports.php?p1=<?php echo $pageno1 + 1; ?>"  class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>


    <!-- trending -->



    <div class="card set">
        <div class="card title">
            <h1>Trending</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">
                    <div style="margin-top: 62px;">
                        <?php

                        if ($pageno2 != 0) {
                        ?>
                            <a href="reports.php?p2=<?php echo $pageno2 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>
                    </div>
                </div>

                <?php
                require('config.php');


                //if (isset($_REQUEST['IID'])) {
                //$IID = $_REQUEST['IID'];


                $alldatatrending = "SELECT i.Name, i.itemImgLoc  FROM `report` AS r , `inventory` AS i WHERE i.IID = r.IID ;";
                $alldatatrendings = $con->query($alldatatrending);
                $n_alltr = $alldatatrendings->num_rows;
                $datajrnl = $alldatatrendings->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_datatr = ceil($n_alltr / $resultset_per_new_arrivals);



                $offset2 = (int)$pageno2 * $resultset_per_new_arrivals;


                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `report` AS r , `inventory` AS i WHERE i.IID = r.IID ORDER BY `totalView` DESC LIMIT 5 OFFSET " . $offset2 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {
                    $numberofrows = $resultSelectBook->num_rows;

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];


                ?>




                        <div class="card_column">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>





                <?php
                    }
                }

                //}

                //else {
                //  header("Location: ./index.php?error=bookView");
                // }
                ?>
                <div class="card_column" style="width:2%;">
                    <div style="margin-top: 62px;">
                        <?php
                        $max2 = $number_of_datatr - 1;
                        if ($pageno2 != $max2) {
                        ?>
                            <a href="reports.php?p2=<?php echo $pageno2 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- trending -->



    <!-- Suggestions -->



    <div class="card set">
        <div class="card title">
            <h1>Suggestions</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width:2%;">
                    <div style="margin-top: 62px;">
                        <?php

                        if ($pageno3 != 0) {
                        ?>
                            <a href="reports.php?p2=<?php echo $pageno3 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>
                    </div>
                </div>

                <?php
                require('config.php');


                //if (isset($_REQUEST['IID'])) {
                //$IID = $_REQUEST['IID'];

                $alldatasuges = "SELECT i.Name, i.itemImgLoc  FROM `report` AS r , `inventory` AS i WHERE i.IID = r.IID ORDER BY `totalDownload` ;";
                $alldatasgs = $con->query($alldatasuges);
                $n_allsgs = $alldatasgs->num_rows;
                $datasgs = $alldatasgs->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_datasgs = ceil($n_allsgs / $resultset_per_new_arrivals);



                $offset3 = (int)$pageno3 * $resultset_per_new_arrivals;



                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `report` AS r , `inventory` AS i WHERE i.IID = r.IID ORDER BY `totalDownload` DESC LIMIT 5 OFFSET " . $offset3 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {
                    $numberofrows = $resultSelectBook->num_rows;


                    $resultset_per_new_arrivals = 5;
                    $number_of_datasgs = ceil($numberofrows / $resultset_per_new_arrivals);


                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];


                ?>




                        <div class="card_column">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>





                <?php
                    }
                }

                //}

                //else {
                //  header("Location: ./index.php?error=bookView");
                // }
                ?>
                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">
                        <?php
                        $max3 = $number_of_datasgs - 1;
                        if ($pageno3 != $max2) {
                        ?>
                            <a href="reports.php?p3=<?php echo $pageno3 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Suggestions -->


    <?php
    require "Footer.php";
    ?>

</body>

</html>