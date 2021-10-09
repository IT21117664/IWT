<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Past Papers</title>

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

    if (!isset($_GET["p4"])) {
        $pageno4 = 0;
    } else {
        $pageno4 = $_GET["p4"];
    }

    if (!isset($_GET["p5"])) {
        $pageno5 = 0;
    } else {
        $pageno5 = $_GET["p5"];
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
            <input type="text" class="txtSearch" placeholder="Search...">
            <input type="button" value="Search" class="btn primary">
            <a href="#" class="topRighta">Advanced Search</a>
            <div style="width: 100%;"></div>
        </div>
    </div>


    <!-- 2020 -->


    <div class="card set">
        <div class="card title">
            <h1>2020</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php

                        if ($pageno1 != 0) {
                        ?>
                            <a href="past_papers.php?p1=<?php echo $pageno1 - 1; ?>" class="page_next">❮</a>
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

                $alldata20 = "SELECT i.Name, i.itemImgLoc   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID ;";
                $alldata20 = $con->query($alldata20);
                $n_all20 = $alldata20->num_rows;
                $data20 = $alldata20->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_data20 = ceil($n_all20 / $resultset_per_new_arrivals);



                $offset1 = (int)$pageno1 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2020-01-01' AND '2020-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset1 . ";";
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
                        $max = $number_of_data20 - 1;
                        if ($pageno1 != $max) {
                        ?>
                            <a href="past_papers.php?p1=<?php echo $pageno1 + 1; ?>"  class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>


    <!-- 2020 -->



    
    <!-- 2019 -->


    <div class="card set">
        <div class="card title">
            <h1>2019</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php

                        if ($pageno2 != 0) {
                        ?>
                            <a href="past_papers.php?p2=<?php echo $pageno2 - 1; ?>" class="page_next">❮</a>
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

                $alldata19 = "SELECT i.Name, i.itemImgLoc   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID ;";
                $alldata19 = $con->query($alldata19);
                $n_all19 = $alldata19->num_rows;
                $data19 = $alldata19->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_data19 = ceil($n_all19 / $resultset_per_new_arrivals);



                $offset2 = (int)$pageno2 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2019-01-01' AND '2019-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset2 . ";";
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
                        $max = $number_of_data19 - 1;
                        if ($pageno2 != $max) {
                        ?>
                            <a href="past_papers.php?p2=<?php echo $pageno2 + 1; ?>"  class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>


    <!-- 2019 -->


    <!-- 2018 -->


    <div class="card set">
        <div class="card title">
            <h1>2018</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php

                        if ($pageno3 != 0) {
                        ?>
                            <a href="past_papers.php?p3=<?php echo $pageno3 - 1; ?>" class="page_next">❮</a>
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

                $alldata18 = "SELECT i.Name, i.itemImgLoc   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID ;";
                $alldata18 = $con->query($alldata18);
                $n_all18 = $alldata18->num_rows;
                $data18 = $alldata18->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_data18 = ceil($n_all18 / $resultset_per_new_arrivals);



                $offset3 = (int)$pageno3 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2018-01-01' AND '2018-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset3 . ";";
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
                        $max = $number_of_data18 - 1;
                        if ($pageno3 != $max) {
                        ?>
                            <a href="past_papers.php?p3=<?php echo $pageno3 + 1; ?>"  class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>


    <!-- 2018 -->

    
    <!-- 2017 -->


    <div class="card set">
        <div class="card title">
            <h1>2017</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php

                        if ($pageno4 != 0) {
                        ?>
                            <a href="past_papers.php?p4=<?php echo $pageno4 - 1; ?>" class="page_next">❮</a>
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

                $alldata17 = "SELECT i.Name, i.itemImgLoc   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID ;";
                $alldata17 = $con->query($alldata17);
                $n_all17 = $alldata17->num_rows;
                $data17 = $alldata17->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_data17 = ceil($n_all17 / $resultset_per_new_arrivals);



                $offset4 = (int)$pageno4 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2017-01-01' AND '2017-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset4 . ";";
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
                        $max = $number_of_data17 - 1;
                        if ($pageno4 != $max) {
                        ?>
                            <a href="past_papers.php?p4=<?php echo $pageno4 + 1; ?>"  class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>


    <!-- 2017 -->

    
    <!-- 2016 -->


    <div class="card set">
        <div class="card title">
            <h1>2016</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div style="margin-top: 62px;">

                        <?php

                        if ($pageno5 != 0) {
                        ?>
                            <a href="past_papers.php?p1=<?php echo $pageno5 - 1; ?>" class="page_next">❮</a>
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

                $alldata16 = "SELECT i.Name, i.itemImgLoc   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID ;";
                $alldata16 = $con->query($alldata16);
                $n_all16 = $alldata16->num_rows;
                $data16 = $alldata16->fetch_assoc();

                $resultset_per_new_arrivals = 5;
                $number_of_data16 = ceil($n_all16 / $resultset_per_new_arrivals);



                $offset5 = (int)$pageno5 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2016-01-01' AND '2016-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset5 . ";";
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
                        $max = $number_of_data16 - 1;
                        if ($pageno5 != $max) {
                        ?>
                            <a href="past_papers.php?p5=<?php echo $pageno5 + 1; ?>"  class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>


    <!-- 2016 -->






    <?php
    require "Footer.php";
    ?>

</body>

</html>