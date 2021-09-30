<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIIT ONLINE LIBRARY - ADMIN</title>
    <link rel="stylesheet" href="./css/main.css">
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


    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mainSlide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html>