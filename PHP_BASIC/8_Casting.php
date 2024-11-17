<?php

// Cast to string, use the (string) statement:

// $a = 5; // Integer
// $b = 5.34; // Float
// $c = "hello"; // String
// $d = true; // Boolean
// $e = NULL; // NULL

// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e = (string) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// Cast to Integer
// To cast to integer, use the (int) statement:

// $a = 5; // Integer
// $b = 5.34; // Float
// $c = "25 kilometers"; // String
// $d = "kilometers 25"; // String
// $e = "hello"; // String
// $f = true; // Boolean
// $g = NULL; // NULL

// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int) $e;
// $f = (int) $f;
// $g = (int) $g;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
// var_dump($g);


// Cast to Float

// $a = 5; // Integer
// $b = 5.34; // Float
// $c = "25 kilometers"; // String
// $d = "kilometers 25"; // String
// $e = "hello"; // String
// $f = true; // Boolean
// $g = NULL; // NULL

// $a = (float) $a;
// $b = (float) $b;
// $c = (float) $c;
// $d = (float) $d;
// $e = (float) $e;
// $f = (float) $f;
// $g = (float) $g;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
// var_dump($g);

//Cast to Boolean
// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = 0;       // Integer
// $d = -1;      // Integer
// $e = 0.1;     // Float
// $f = "hello"; // String
// $g = "";      // String
// $h = true;    // Boolean
// $i = NULL;    // NULL

// $a = (bool) $a;
// $b = (bool) $b;
// $c = (bool) $c;
// $d = (bool) $d;
// $e = (bool) $e;
// $f = (bool) $f;
// $g = (bool) $g;
// $h = (bool) $h;
// $i = (bool) $i;


// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
// var_dump($g);
// var_dump($h);
// var_dump($i);


// Cast to Array
// To cast to array, use the (array) statement:

// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = "hello"; // String
// $d = true;    // Boolean
// $e = NULL;    // NULL

// $a = (array)$a;
// $b = (array)$b;
// $c = (array)$c;
// $d = (array)$d;
// $e = (array)$e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// Cast to Object
// To cast to object, use the (object) statement:

// $a = 5;// Integer
// $b = 5.34;// Float
// $c = "hello";// String
// $d = true;// Boolean
// $e = NULL;// NULL

// $a = (object) $a;
// $b = (object) $b;
// $c = (object) $c;
// $d = (object) $d;
// $e = (object) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);


// Converting Arrays into Objects:

// $a = array("Volvo", "BMW", "Toyota"); // indexed array
// $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

// $a = (object)$a;
// $a = (object)$b;

// var_dump($a);
// var_dump($b);

// Cast to NULL
// To cast to NULL, use the (unset) statement:

$a = 5; // Integer
$b = 5.34; // Float
$c = "hello"; // String
$d = true; // Boolean
$e = NULL; // NULL

$a = (unset)$a;
$b = (unset)$b;
$c = (unset)$c;
$d = (unset)$d;
$e = (unset)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);





?>