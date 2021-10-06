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
*/
//------------------------------ /Books preview----------------------------------------