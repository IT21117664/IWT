<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Journals</title>

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
            <form action="searchResult.php" method="post">
                <div class="column middle">
                    <input type="text" name="keyWord" class="txtSearch" placeholder="Search...">
                    <input type="button" value="Search" class="btn primary">
                    <a href="#" class="topRighta">Advanced Search</a>
                <div style="width: 100%;"></div>
                </div>
            </form>
    </div>

    <div class="card set">
        <div class="card title">
            <h1>New Arrivals</h1>
        </div>
                                
        <div class="row">
            <div class="column micro"></div>
                <div class="column large">

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j8.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j6.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j2.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j5.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j3.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card set">
        <div class="card title">
            <h1>Trending</h1>
        </div>
                                
        <div class="row">
            <div class="column micro"></div>
                <div class="column large">

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j1.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j3.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j9.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j8.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j5.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card set">
        <div class="card title">
            <h1>Suggestions</h1>
        </div>
                                
        <div class="row">
            <div class="column micro"></div>
                <div class="column large">

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j2.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j3.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j9.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j6.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>

                    <div class="card_column">
                        <div id="book1" class="card">
                            <img src="./img/journal/j4.jpg" alt="book img">
                                <div><label>Book Name</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                                                          
<?php 
    require "Footer.php";
?>

</body>

</html>