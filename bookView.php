<?php
    require('config.php');
//-----------------------------------------------------------------------------
    $userID = 123;
    $userType = 0;
//---------------------------------------------------------------------------------

    if (isset($_REQUEST['IID'])){
        $IID = $_REQUEST['IID'];

        $sqlSelectBook = "SELECT i.Name, i.free, i.itemImgLoc, i.pdfPath, i.Description FROM inventory AS i WHERE  i.IID = '$IID' ORDER BY i.IID ASC LIMIT 1;";
        $resultSelectBook = $con -> query($sqlSelectBook);
        if ($resultSelectBookCheck -> num_rows > 0){
            while ($rowSelectBook = mysqli_fetch_assoc($resultSelectBook)){
                $Name = $rowSelectBook['Name'];
                $free = $rowSelectBook['free'];
                $pdfPath = $rowSelectBook['pdfPath'];
                $description = $rowSelectBook['Description'];
                $itemImgLoc = $rowSelectBook['itemImgLoc'];
            }
        }
    }else{
        header("Location: ./index.php?error=bookView");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIIT ONLINE LIBRARY - ADMIN</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/07c9a11431.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</head>
<body>
    <div class="slide">
        <div class="slidecaption">
            <img class="mainSlide" src="./img/Slide/1.jpg" style="width:100%">
            <div class="topRight">
                <h3>RMB
                <input type="button" value="Button" class="btn primary"></h3>
            </div>

            <div class="topLeft">
                <h3>Time</h3>
            </div>

        </div>
        <img class="mainSlide" src="./img/Slide/2.jpg" style="width:100%">
        <img class="mainSlide" src="./img/Slide/3.jpg" style="width:100%">
    </div>

    <div class="nav">
        <ul>
            <li><a href="#Library">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
        </ul>

        <div class="row">
            <div class="column side"></div>
            <div class="column middle">
                <input type="text" class="txtSearch" placeholder="Search...">
                <input type="button" value="Search" class="btn primary">
            </div>
        </div>

        <div class="row">
            <div class="column middle">
                <h2 align="left"><?php echo $Name; ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="column side">
                <img src="<?php echo $itemImgLoc; ?>" alt="<?php echo $Name; ?>" class="bookView">
            </div>
            <div class="column middle">
                <div class="bookData">
                    <table>
                        <tr>
                            <td class="title">Language</td>
                            <td class="data">English</td>
                        </tr>

                        <tr>
                            <td class="title">Author</td>
                            <td class="data">English</td>
                        </tr>

                        <tr>
                            <td class="title">Publisher</td>
                            <td class="data">English</td>
                        </tr>

                        <tr>
                            <td class="title">ISBN</td>
                            <td class="data">English</td>
                        </tr>

                        <tr>
                            <td class="title">Ratings</td>
                            <td class="data">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </td>
                        </tr>
                    </table>
                    <?php
                        $show = 0;
                        if ($free == 1 && (!isset($userType))){
                            $show = 1;
                        }else if (isset($userType)){
                            $show = 1;
                        }
                        if ($show == 1){
                            echo "<a href=\"$pdfPath\" class=\"btn primary\">Read</a>
                            <a href=\"$pdfPath\" class=\"btn info\">Reserve</a>
                            <a href=\"$pdfPath\" class=\"btn warning\">Download</a>";
                        }else{
                            echo "<a href=\"#\" class=\"btn primary\" disabled>Read</a>
                            <a href=\"#\" class=\"btn info\" disabled>Reserve</a>
                            <a href=\"#\" class=\"btn warning\" disabled>Download</a>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
                <p style="margin-left: 30px;"><?php echo $description; ?></p>
        </div>
        

    </div>
    

    <div class="footer">
        <p>E - book | Reports | Journals | Library Police | Contact Us<br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>
</body>
</html>