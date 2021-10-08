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

    <header>

        <div class="head_tag">
            <button class="head_btn" type="submit">Library</button>
            <button class="head_btn" type="submit">Home</button>
            <button class="head_btn" type="submit">Articles</button>
            <button class="head_btn" type="submit">Past papers</button>
            <button class="head_btn" type="submit">Reports</button>
            <button class="head_btn" type="submit">Journals</button>
        </div>

    </header>


    <form id="form">
        <input type="search" id="query" name="q" class="input_search">
        <button>Search</button>
        <a href="#">Advanced Search</a>
    </form>

    <div class="main_div">
        <div class="row">
            <div class="column_card">
                <div class="card">
                    <img class="image_card" src="img/card/business-article-3914492.jpg" alt="image">
                </div>
            </div>
            <div class="column_card">
                <div class="card">
                <img class="image_card"  src="img/card/business-article-3914492.jpg" alt="image">
                </div>
            </div>
            <div class="column_card">
                <div class="card">
                <img class="image_card"  src="img/card/business-article-3914492.jpg" alt="image">
                </div>
            </div>
            <div class="column_card">
                <div class="card">
                <img  class="image_card" src="img/card/business-article-3914492.jpg" alt="image">
                </div>
            </div>
            <div class="column_card">
            <div class="card">
                <img  class="image_card" src="img/card/business-article-3914492.jpg" alt="image">
                </div>
            </div>
            <div class="column_card">
            <div class="card">
                <img  class="image_card" src="img/card/business-article-3914492.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>

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