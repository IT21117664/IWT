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

//-------------------------------------


//--------------------------------------------



//--------------------------------------------

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
    dd = '0' + dd;
}

if (mm < 10) {
    mm = '0' + mm;
}

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("Lend_Book_Member_Table_DueDate").setAttribute("min", today);
document.getElementById("Lend_Book_Member_Table_LendDate").setAttribute("value", today);
document.getElementById("Retrieve_Book_Table_DueDate").setAttribute("value", today);

function closeWindow() {
    window.opener;
    window.close();
}


/*----------pasiya----------------*/

function logout() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
            window.location = "index.php";
        }
    };

    r.open("GET", "logout.php?php=", true);
    r.send();


}
/*----------*/

function() {
    document.getElementById("email").value;
    document.getElementById("email").value;
}