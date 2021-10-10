
<?php
    require('header.php');
    /*
    require('config.php');
    $output = "";
    if (isset($_POST['keyWord'])){
        $keyWord = $_POST['keyWord'];
        
        $sqlSearch = "SELECT i.Name, i.free, i.itemImgLoc,  i.IID FROM inventory AS i , journal AS j , pastpaper AS pp , book AS b , report AS r , author AS a , publisher AS p WHERE i.Name LIKE '%$keyWord%' OR p.publisherName LIKE '%$keyWord%' OR pp.module LIKE '%$keyWord%' OR pp.Semester LIKE '%$keyWord%' OR pp.Year LIKE '%$keyWord%' OR a.authorName LIKE '%$keyWord%' GROUP BY i.Name ORDER BY i.IID ASC LIMIT 20;";
        $resultSearch = mysqli_query($con, $sqlSearch);
        $resultSearchCheck = mysqli_num_rows($resultSearch);
        if ($resultSearchCheck > 0){
            while ($rowSearch = mysqli_fetch_assoc($resultSearch)){
                $bookName = $rowSearch['Name'];
                $bookFree = $rowSearch['free'];
                $bookImg = $rowSearch['itemImgLoc'];
                $bookID = $rowSearch['IID'];

                $output .= "<div class=\"column mini\"><div class=\"card\"><img src=\"$bookImg\" class=\"searchimg\" alt=\"$bookName\" id=\"$bookName\"><div class=\"cardDetails\"><div class=\"row\"><p class=\"searchResult\">$bookName<br></p></div></div></div></div>";
            }
        }else{
            $output .= "<div class=\"column side\"></div><div class=\"column middle\"><div class=\"card\"><div class=\"cardDetails\"><div class=\"row\"><p class=\"searchResult\">No any result found</p></div></div></div></div>";
        }
    }else{
        header("Location: ./index.php?error=search");
    }
    */
?>

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