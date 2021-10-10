
<?php
    require('header.php');

    require('config.php');
        $output = "";
        $sqlBook = "SELECT i.Name, A.authorName, i.itemImgLoc,  i.IID FROM inventory AS i , book AS b , author AS a , publisher AS p WHERE i.IID = b.IID ORDER BY i.totalDownload ASC LIMIT 5;";
        $bookQuery = mysqli_query($con, $sqlBook);
        $bookData = mysqli_num_rows($bookQuery);
        if ($bookData > 0){
            while ($bookArray = mysqli_fetch_assoc($bookQuery)){
                $bookName = $bookArray['Name'];
                $bookAuthor = $bookArray['authorName'];
                $bookImg = $bookArray['itemImgLoc'];
                $bookID = $bookArray['IID'];

                $output .=  "
                <div class=\"card set\">
                    <div class=\"card title\">
                        <h1>New Arrivals</h1>
                    </div>
                    <div class=\"row\">
                    <div class=\"column micro\"></div>
                <div class=\"column large\">
                    <div class=\"card_column\">
                        <div id=\"book1\" class=\"card\">
                            <img src=\"$bookImg\" alt=\"$bookName\">
                            <div><label>$bookName</label></div>
                            <div><label></label></div>
                            <div><label>$bookName</label></div>
                            <div><label>$bookAuthor</label></div>
                        </div>
                    </div>
                    </div>
                    </div>";
            }
        }
    
        else{
        header("Location: ./index.php?error=search");
        }
?>

<div class="card set">
        <div class="card title">
            <h1>Trending</h1>
        </div>


    <div class="list_box">
        <div class="row">
            <div class="column_list">
                <div class="card">

                    <div><a href="book details.php">New Arrivals</a></div>
                    <ul>
                        <li><a href="book details.php">book 1</a></li>
                        <li> <a href="book details.php">book 2</a></li>
                        <li><a href="book details.php">book 3</a></li>
                        <li> <a href="book details.php">book 4</a></li>
                        <li><a href="book details.php">book 5</a></li>
                        <li> <a href="book details.php">book 6</a></li>
                    </ul>
                </div>
            </div>


            <div class="column_list">
                <div class="card">
                    <div><a href="book details.php">Trending</a></div>
                    <ul>
                        <li><a href="book details.php">book 1</a></li>
                        <li> <a href="book details.php">book 2</a></li>
                        <li><a href="book details.php">book 3</a></li>
                        <li> <a href="book details.php">book 4</a></li>
                        <li><a href="book details.php">book 5</a></li>
                        <li> <a href="book details.php">book 6</a></li>
                    </ul>
                </div>
            </div>


            <div class="column_list">
                <div class="card">
                    <div><a href="book details.php">Most rated</a></div>
                    <ul>
                        <li><a href="book details.php">book 1</a></li>
                        <li> <a href="book details.php">book 2</a></li>
                        <li><a href="book details.php">book 3</a></li>
                        <li> <a href="book details.php">book 4</a></li>
                        <li><a href="book details.php">book 5</a></li>
                        <li> <a href="book details.php">book 6</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>




</html>