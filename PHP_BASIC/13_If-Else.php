<?php

// 1.Electric bill calculation

$electricityUnit = 251;

if ($electricityUnit <= 50) {
    $totalElectricityBill = $electricityUnit * 3.50;
    echo "First 50 unit Ecectricitybill = $totalElectricityBill ";
} else if ($electricityUnit <= 150) {
    $totalElectricityBill = $electricityUnit * 4;
    echo "Next 100 unit Electricitybill = $totalElectricityBill";
} else if ($electricityUnit <= 250) {
    $totalElectricityBill = $electricityUnit * 5.20;
    echo "Next 100 unit Electricitybill = $totalElectricityBill";
} else {
    echo "Above 250 unit Electricitybill = " . $electricityUnit * 6.50;
}



// 2.Check if a person is eligible to vote by age

// $age = 7;

// if($age >= 18){
//     echo "You can give your vote";
// }
// else{
//     echo "You can't give your vote";
// }


// 3. Check if a person is eligible for marriage in BD by gender

// $age = 21;

// if($age >= 22){
//     echo "You are eligible to marry a girl";
// }
// else{
//     echo"You are not eligible to marry a girl";
// }


// 4.Check if number is positive or negetive

// $num = -1;

// if($num > 0){
//   echo "It is positive number";
// }
// else{
//     echo "It is negative number";
// }


// 5.Check if number is odd or even

// $num = 5;

// if($num / 2 == 0){
//     echo "The number is even";
// }
// else{
//     echo "The number is odd";
// }


// 6.Check if data is integer or string

// $anyInput = '20';

// if($anyInput){
//     echo var_dump($anyInput);
// }


// 7.Buy onion
// $onionCost = 101;

// if ($onionCost <= 100){
//     echo 'I will onion';
// }
// else{
//     echo "I won't buy onion";
// }


// 8. Define Gpa

// $totalNumber = 49;

// if($totalNumber <= 100 && $totalNumber >= 80){
//     echo "You will get A+";
// }
// else if($totalNumber <= 80 && $totalNumber >= 70){
//     echo "You will get A";
// }
// else if($totalNumber <= 70 && $totalNumber >= 60){
//     echo "You will got A-";
// }
// else if($totalNumber <= 60 && $totalNumber >= 50){
//     echo 'You will get B';
// }
// else{
//     echo "You will fail the exam";
// }


// 9.Buy a shirt
// $haveMoney = 400;

// if($haveMoney >= 500){
//    echo 'I will buy the shirt';
// }
// else{
//     echo 'I will not buy the shirt';
// }


//Short Hand If
// $a = 5;

// if ($a < 10)
//  $b = "Hello";

// echo $b;


//Short Hand If...Else
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;


//Nested If else
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}


//Alternate If else(Use WordPress)
$num = 15;

if ($num % 2 == 0):
    echo "Even Number";
else:
    echo "Odd Number";
endif;