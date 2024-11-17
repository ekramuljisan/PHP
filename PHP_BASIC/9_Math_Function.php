<?php
//1. pi() Function
// echo(pi());

//2. min() and max() Functions
// echo(min(0, 150, 30, 20, -8, -200));
// echo "</br>";
// echo(max(0, 150, 30, 20, -8, -200));

//3. abs() Function
// The abs() function returns the absolute (positive) value of a number:
// echo(abs(-6.7));

//4. sqrt() Function
// The sqrt() function returns the square root of a number:
// echo (sqrt(64));

//5. round() Function
// The round() function rounds a floating-point number to its nearest integer:
// echo(round(0.60) . "<br>");
// echo(round(0.50) . "<br>");
// echo(round(0.49) . "<br>");
// echo(round(-4.40) . "<br>");
// echo(round(-4.60));

//6. rand()
// The rand() function generates a random number:
// echo(rand(10, 100));

//7. mt_rand()
$n = mt_rand(10, 100);
if ($n % 2 == 0) {
    echo "$n is Head";

} else {
    echo "$n is Tail";
}
