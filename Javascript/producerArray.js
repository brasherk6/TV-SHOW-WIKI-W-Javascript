"use strict";


const producers = ["Brian Watkins, ", "Zev Borow, ", "Brad Pitt, ", "Dede Gardner, ", "Jeremy Kleiner, ", "Josh Brolin, ", "Robin Sweet, ",
  "MaHeather Raengo, ", "Amy Seimetz, ", "Lawrence Trilling, ", "and Tony Kravitz."];

var text = "";

//read through the array and add it to the text var
for (let i = 0; i < producers.length; i++) {
  text += producers[i];
}

document.getElementById("producers").innerHTML = text;



