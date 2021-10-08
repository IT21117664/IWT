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

    require('header.php');
    logIn();

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


    
    <form id="form">
        <input type="search" id="query" name="q" img src="C:\Users\MSii\Desktop\search.jpg">
        <button>Search</button>
    </form>

    <a href="#" style="text-align: left;">Advanced Search</a>

 
    <div class="row">
        <div class="column micro"></div>
        <div class="column large">
            <div class="card_column">
                <div id="book1" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>


            <div class="card_column">
                <div id="book2" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>

            <div class="card_column">
                <div id="book3" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>

            <div class="card_column">
                <div id="book4" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>

            <div class="card_column">
                <div id="book5" class="card">
                    <img src="./img/logo.png" alt="book img">
                    <div><label>Book Name</label></div>
                    <div><label>Authot</label></div>
                    <div><label>ISBN</label></div>
                </div>
            </div>
        </div>
    </div>






</body>

</html>