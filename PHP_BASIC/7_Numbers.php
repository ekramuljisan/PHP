<?php
//There are three main numeric types in PHP:
// $a = 5;//Integer
// $b = 5.34;//Float
// $c = "25";//Number Strings
// echo var_dump($a);
// echo var_dump($b);
// echo var_dump($c);


// Check if the type of a variable is integer:
// $x = 5985;
// var_dump(is_int($x));

// $x = 59.85;
// var_dump(is_int($x));


// Check if the type of a variable is float:
// $x = 10.365;
// var_dump(is_float($x));


// Check if the variable is numeric:
$x = 5985;
var_dump(is_numeric($x));

// $x = "5985";
// var_dump(is_numeric($x));
// $x = "59.85" + 100;
// var_dump(is_numeric($x));

// $x = "Hello";
// var_dump(is_numeric($x));


// Cast float and string to integer:
// Cast float to int
// $x = 23465.768;
// $int_cast = (integer) $x;
// echo $int_cast;

echo "<br>";



// Cast string to int
// $x = "23465.768";
// $y = (integer) $x;
// echo $y;
