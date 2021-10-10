
<?php
    require('header.php');

    if (isset($_SESSION['userID'])){
        header("Location: user_page.php");
    }

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

                $output .=  "<div class=\"card_column\"><div class=\"card\">
                            <img src=\"$bookImg\" alt=\"$bookName\">
                            <div><label>$bookName</label></div>
                            <div><label></label></div>
                            <div><label>$bookName</label></div>
                            <div><label>$bookAuthor</label></div>
                            </div>
                        </div>";
            }
        }
    
        else{
        header("Location: ./index.php?error=search");
        }
?>
    <div class="column micro"></div>
        <div class="column large">
            <div class="card set">
                <div class="card title">
                    <h1>New Arrivals</h1>
                </div>
                <div class="row">
                        <?php echo $output; ?>
                </div>
            </div>
        </div>
    </div>


    


</body>




</html>