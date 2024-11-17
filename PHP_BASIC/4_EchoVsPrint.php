<?php
// echo vs print
//The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

$first_name = "Ekramul";
echo "$first_name","Islam";
echo "<br>";
echo "My name is {$first_name} Islam";
// print("$first_name", "Islam");

