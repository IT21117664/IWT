<?php
    require('config.php');
    require('Header.php');
//--------------------------------------------------------------------------

    if (isset($_SESSION['userID'])){
        $userID = $_SESSION['userID'];
        $phoneNumber = $_SESSION['Mobile'];
        $email = $_SESSION['mail'];
        $FName = $_SESSION['FName'];
        $LName = $_SESSION['LName'];
        $NameWithInitial = $_SESSION['NWI'];
        $profileImg = $_SESSION['ProfileImg'];
        $DateOfBirth = $_SESSION['DOB'];
        $Address = $_SESSION['Address'];
    }else{
        header("Location: ./index.php");
    }

    //echo $profileImg;
//--------------------------------------------------------------------------
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
            <form action="profileUp.php" enctype="multipart/form-data" method="post">
                <div class="card">
                    <img src="<?php echo $profileImg; ?>" class="proImg"  alt="Avatar" id="avator"><br>
                    <input type="file" class="btn info" name="avatar">
                    <div class="cardDetails">
                        <div class="row">
                                <input type="hidden" name="userID" value="<?php echo $userID; ?>">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" value="<?php echo $FName; ?>" class="txt formlong" disabled>
                                
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" value="<?php echo $LName; ?>" class="txt formlong" disabled>

                                <label for="nwi">Name With Initial</label>
                                <input type="text" id="nwi" name="nwi" value="<?php echo $NameWithInitial; ?>" class="txt formlong" disabled>

                                <label for="mob">Mobile Number</label>
                                <input type="text" id="mob" name="mob" value="<?php echo $phoneNumber; ?>" class="txt formlong">

                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" value="<?php echo $Address; ?>" class="txt formlong">

                                <label for="mail">E - mail</label>
                                <input type="email" id="mail" name="mail" value="<?php echo $email; ?>" class="txt formlong" disabled>

                                <label for="dob">Date Of Birth</label>
                                <input type="text" id="dob" name="dob" value="<?php echo $DateOfBirth; ?>" class="txt formlong" disabled>

                                <div class="right">
                                    <button type="reset" class="btn danger">Clear</button>
                                    <button type="submit" name="update" value="update" class="btn success">Update</button>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php require('Footer.php'); ?>
    <script> carousel();</script>
</body>
</html>