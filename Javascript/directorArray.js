"use strict";

const directors = ["Alonso Ruizpalacios (101, 102), ", "Jennifer Getzinger (103, 104), ", "Amy Seimetz (105, 106), ", " and Lawrence Trilling (107, 108). "];

var text = "";

//read through the array and add it to the text var
for (let i = 0; i < directors.length; i++) {
  text += directors[i];
}

document.getElementById("directors").innerHTML = text;



