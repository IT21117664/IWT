<?php require('Header.php'); ?>

    <div class="nav">
        <ul>
            <li><a class="logoL">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
            <li><a href="#about" >Admin</a></li>
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
            <button type="button" id="retriveBk" class="btn warning btn-lg">Retrive Book</button>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Member</h3>
            <input type="button" id="nmVal" value="New Member Validation" class="btn border colorprimary">
            <input type="button" id="" value="Add Memeber" class="btn border colorprimary">
            <input type="button" id="memDel" value="Member Details" class="btn border colorprimary">
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