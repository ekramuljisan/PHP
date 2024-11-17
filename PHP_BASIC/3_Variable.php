<?php

// $num1 = 10;
// $num2 = 20;

// echo "The first number is =". $num1;
// echo "<br>";
// echo "The second number is =". $num2;
// echo "<br>";
// echo"The sum of the number is = ". $num1 + $num2;

//There are three Variable Scope
// 1.Local
// 2.Global
// 3.Static

//Local Scope(function er vitorer variable function er vitorei call kora)
// function personInfo(){
//     $personName = "EkramulIslam";
//     echo "The variable is = ". $personName;
// }
// personInfo();
// echo "The variable is = " .$personName;

//Global Scope(function er bahirer variable function er bahirei call kora)
// $personName = "Ekramul Islam";

// function personInfo(){
//     echo"Inside Call:". $personName."<br>";
// }
// personInfo();
// echo "Outside Call:".$personName;

//Global Scope(function er vitore global keyword diye function er bahirer variable function er vitore use kora)
// $firstNum = 20;
// $secondNum = 10;

// function personInfo(){
//     global $firstNum, $secondNum;
//     $getResult = $firstNum + $secondNum;
//     echo $getResult;
// }
// personInfo();

//GLOBALS Scope(PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.)
// $x = 10;
// $y = 10;

// function sumNumber(){

//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

// }

// sumNumber();
// echo $y;

//Static keyword

function myTest()
{
    static $x = 1;
    echo $x . "</br>";
    $x = $x + 1;
}

myTest();
myTest();
myTest();
myTest();
