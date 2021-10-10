<?php
    require('Header.php');

//---------------------------------------------------------------------------------

    if (isset($_SESSION['userID'])){
        $userName = $_SESSION['FName'];
        logout();
    }else{
        logIn();
    }

//---------------------------------------------------------------------------------
$adminShow = "";
if (isset($_SESSION['userID'])){
    if ($_SESSION['userType'] == 1){
        $adminShow = "<li><a href=\"admin.php\">Admin</a></li>";
    }
}
//---------------------------------------------------------------------------------
?>

    <div class="nav">
        <ul>
            <li><a href="#Library">Library</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="past_papers.php">Past Papers</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="journals.php">Journals</a></li>
            <?php echo $adminShow; ?>
        </ul>
    </div>

    <div class="row">

        <div class="right">
            <button type="button" class="btn primary">Overrides</button>
            <i class="far fa-envelope fa-2x"></i>
        </div>
    </div>
    
    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <a href="LendBK.php" target="blank" id="lendBk" class="btn danger btn-lg">Lend Book</a>
            <a href="RetrieveBK.php" target="blank" id="retriveBk" class="btn warning btn-lg">Retrive Book</a>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Member</h3>
            <a href="MemberVal.php" target="blank" id="nmVal" value="New Member Validation" class="btn border colorprimary">New Member Validation</a>
            <a href="register.php" target="blank" id="" value="Add Memeber" class="btn border colorprimary">Add Memeber</a>
            <a href="MemberDel.php" target="blank" id="memDel" value="Member Details" class="btn border colorprimary">Member Details</a>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Books</h3>
            <input type="button" value="Add New Books" class="btn border colorprimary">
            <input type="button" value="Book Detail" class="btn border colorprimary">
            <input type="button" value="Request New Books" class="btn border colorprimary">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">IT Technician</h3>
            <input type="button" value="Error Submission" class="btn border colorprimary">
            <input type="button" value="Contact Detail" class="btn border colorprimary">
        </div>
    </div>

    <div class="footer">
        <p>E - book | Reports | Journals | Library Police | Contact Us<br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>


<script>popup();</script>
</body>
</html>