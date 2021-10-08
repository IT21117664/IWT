<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Article</title>

    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>

</head>

<body>

    <?php
        require('header1.php');
    ?>

    <div class="nav">
        <ul>
            <li><a class="logoL">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
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



    <div class="row">
        
            <div class="card">
                <h1>New Arrivals</h1>
            </div>
        

        <?php
        require('config.php');

        // if (isset($_REQUEST['IID'])) {
            $IID = $_REQUEST['IID'];

            $sqlSelectBook = "SELECT i.Name, i.free, i.itemImgLoc, i.pdfPath, i.Description FROM inventory AS i WHERE  i.IID = '" . $IID . "' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET 0;";
            $resultSelectBook = $con->query($sqlSelectBook);
            if ($resultSelectBook->num_rows > 0) {
                $numberofrows = $resultSelectBook->num_rows;
                for ($i = 0; $i < $numberofrows; $i++) {

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];
                        $free = $rowSelectBook['free'];

                        $sqlSelectaouter = "SELECT * FROM author WHERE  AID  = '" . $rowSelectBook["A_ID"] . "';";
                        $resulsetauther = $con->query($sqlSelectcatery);

                    while ($rowSelectarther = $resulsetauther->fetch_assoc()) {
                        $aouthername =  $rowSelectarther["catName"];
                    }


        ?>
                    <div class="column micro"></div>
                    <div class="column large">
                        <div class="card_column">
                            <div id="book1" class="card">
                                <img src="$itemImgLoc" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>


            <?php
                }
            }
        }
        // } else {
        //     // header("Location: ./index.php?error=bookView");
        // }
            ?>


            <div class="column micro"></div>
            <div class="column large">
                <div class="card_column">
                    <div id="book1" class="card">
                        <img src="./img/book/13.png" alt="book img">
                        <div><label>Book Name</label></div>
                    </div>
                </div>


                <div class="card_column">
                    <div id="book2" class="card">
                        <img src="./img/logo.png" alt="book img">
                        <div><label>Book Name</label></div>

                    </div>
                </div>

                <div class="card_column">
                    <div id="book3" class="card">
                        <img src="./img/logo.png" alt="book img">
                        <div><label>Book Name</label></div>

                    </div>
                </div>

                <div class="card_column">
                    <div id="book4" class="card">
                        <img src="./img/logo.png" alt="book img">
                        <div><label>Book Name</label></div>
                        
                    </div>
                </div>

                <div class="card_column">
                    <div id="book5" class="card">
                        <img src="./img/logo.png" alt="book img">
                        <div><label>Book Name</label></div>
                       
                    </div>
                </div>
            </div>
                    </div>
                    <div class="card set">
                    <div class="row">
                       
                            <div class="card title">
                                <h1>Trending</h1>
                            </div>
                        



                        <div class="column micro"></div>
                        <div class="column large">
                            <div class="card_column">
                                <div id="book1" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                    
                                </div>
                            </div>


                            <div class="card_column">
                                <div id="book2" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                    
                                </div>
                            </div>

                            <div class="card_column">
                                <div id="book3" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                    
                                </div>
                            </div>

                            <div class="card_column">
                                <div id="book4" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                   
                                </div>
                            </div>

                            <div class="card_column">
                                <div id="book5" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


                    <div class="row">
                        
                            <div class="card">
                                <h1>Suggestions</h1>
                            </div>
                        </div>



                        <div class="column micro"></div>
                        <div class="column large">
                            <div class="card_column">
                                <div id="book1" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                   
                                </div>
                            </div>


                            <div class="card_column">
                                <div id="book2" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                   
                                </div>
                            </div>

                            <div class="card_column">
                                <div id="book3" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                    
                                </div>
                            </div>

                            <div class="card_column">
                                <div id="book4" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                    
                                </div>
                            </div>

                            <div class="card_column">
                                <div id="book5" class="card">
                                    <img src="./img/logo.png" alt="book img">
                                    <div><label>Book Name</label></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        require "Footer.php";
                    ?>



</body>

</html>