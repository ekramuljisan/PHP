<?php

// Slicing Strings
// You can return a range of characters by using the substr() function.
// Start the slice at index 8 and end the slice 5 positions later:
// $x="Ekramul Islam";
// echo substr($x, 8, 5);


//Start the slice at index 6 and go all the way to the end:
// $x = "Ekramul Islam";
// echo substr($x, 6);


//Use negative indexes to start the slice from the end of the string:
$x = "Ekramul Islam";
echo substr($x, -5,5);


//Use negative length to specify how many characters to omit, starting from the end of the string:
// $x = "Ekramul Islam";
// echo substr($x, 5, -3);