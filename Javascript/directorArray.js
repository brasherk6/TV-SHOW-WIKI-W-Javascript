"use strict";

const directors = ["Alonso Ruizpalacios (101, 102), ", "Jennifer Getzinger (103, 104), ", "Amy Seimetz (105, 106), ", "Lawrence Trilling (107, 108). <br><br>", 
"Gwyneth Horder-Payton (201, 202), ", "Blackhorse Lowe (204), ", "Deborah Kampmeier (203, 205), ", "Josh Brolin (206), ", "and Catriona McKenzie (207). "];

var text = "";

//read through the array and add it to the text var
for (let i = 0; i < directors.length; i++) {
  text += directors[i];
}

document.getElementById("directors").innerHTML = text;



