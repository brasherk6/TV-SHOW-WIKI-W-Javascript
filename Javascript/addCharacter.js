"use strict";
var $ = function (id) { return document.getElementById(id); };



function validateInput() {

    //assign to variables
    var fullName = document.getElementById("fullName").value;
    var image = document.getElementById("image").value;
    var age = document.getElementById("age").value;
    var occupation = document.getElementById("occupation").value;

    //validation
    var valid = true;

    //checks if the full name, image, age and/or occupation entries are empty
    //if empty, valid is set to false (otherwise the form will still submit) and a "Not valid" message is issued
    if (fullName == "") {
        document.getElementById("fullName_error").innerHTML = "Not valid";
        valid = false;
    } else {
        document.getElementById("fullName_error").innerHTML = " ";
    }


    if (image == "") {
        document.getElementById("image_error").innerHTML = "Not valid";
        valid = false;
    } else {
        document.getElementById("image_error").innerHTML = " ";
    }

    if (age == "") {
        document.getElementById("age_error").innerHTML = "Not valid";
        valid = false;
    } else {
        document.getElementById("age_error").innerHTML = " ";
    }


    if (occupation == "") {
        document.getElementById("occupation_error").innerHTML = "Not valid";
        valid = false;
    } else {
        document.getElementById("occupation_error").innerHTML = " ";
    }

    
    if (valid == true) { saveReservation(); }
}


var saveReservation = function () {
    //sessionStorage.setItem("key", "value");
    //Setting the values of the specified Storage Object item

    sessionStorage.setItem("fullName", $("fullName").value);
    sessionStorage.setItem("image", $("image").value);
    sessionStorage.setItem("age", $("age").value);
    sessionStorage.setItem("birthday", $("birthday").value);
    sessionStorage.setItem("occupation", $("occupation").value);
    sessionStorage.setItem("image", $("image").value);

    //Decide which status radio button has been selected
    if ($("Alive").checked) {
        sessionStorage.setItem("status", $("Alive").value);
    }
    else if ($("Deceased").checked) {
        sessionStorage.setItem("status", $("Deceased").value);
    }
    

    sessionStorage.setItem("mother", $("mother").value);
    sessionStorage.setItem("father", $("father").value);

    sessionStorage.setItem("actor", $("actor").value);
    sessionStorage.setItem("greekGod", $("greekGod").value);


    sessionStorage.setItem("about", $("about").value);
    sessionStorage.setItem("theories", $("theories").value);
    sessionStorage.setItem("notes", $("notes").value);


    // submit form
    $("reservation_form").submit();
};

window.onload = function () {
    $("submit_request").onclick = save;
    $("arrival_date").focus();
};