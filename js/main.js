//------------------------------ Slider ---------------------------------------------
var slideCount = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("mainSlide");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideCount++;
    if (slideCount > x.length) { slideCount = 1 }
    x[slideCount - 1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

//------------------------------ /Slider ---------------------------------------------

//------------------------------ Books preview----------------------------------------

/*
var bookIMG = 0;

function bookpreview() {
    var i;
    var x = document.getElementsByClassName("bookView");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    bookIMG++;
    if (bookIMG > x.length) { bookIMG = 1 }
    x[bookIMG - 1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
<<<<<<< HEAD

//------------------------------ /Books preview----------------------------------------


=======
*/
//------------------------------ /Books preview--------------------------------





















//------------------------------Time---------------------------------------------------
function time() {
    var date_time = new Date();
    var Current_date = date_time.getDay() + "-" + date_time.getMonth() + "-" + date_time.getFullYear();
    var Current_time = date_time.getHours() + ":" + date_time.getMinutes() + ":" + date_time.getSeconds();
    document.getElementById("date_time").innerHTML = Current_date + " | " + Current_time;
}