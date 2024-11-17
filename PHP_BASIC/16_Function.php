<?php
// There are two types of functions
// 1. User Defined function(Made by me)
// 2. Builtin/ Librery function

// User Defined function
// function myname(){
//     echo "<h1>EkramulIslam</h1>";
// }
// myname();


//function totalPrice(){
//     $product_price = 10;
//     $product_qty = 5;
//     $total_product_price = $product_price * $product_qty;
//     return $total_product_price;
//}
//echo totalPrice();


//Function with args & params
// function fullName($fname, $lname){
//     $firstName = $fname;
//     $lastName = $lname;
//     $totalname = $firstName . $lastName;
//     echo $totalname;
// }

//fullName("Ekramul", "Islam");



//Function with default parameter/default value
// function calculation($n1,$n2,$n3=200){
//     $num1=$n1;
//     $num2=$n2;
//     $num3=$n3;
//     echo $num1+$num2-$num3;
// }

// calculation(300,300);
// echo "<br>";
// calculation(200,300);


//Function type hinting
// function calculation(int $n1,int $n2,int $n3=200){
//     $num1=$n1;
//     $num2=$n2;
//     $num3=$n3;
//     echo $num1+$num2-$num3;
// }
// calculation(200,200,200);
// echo "<br>";
// calculation(200,200,200);


//Function multiple type hinting
// function myInfo(string $name,string|int $age,string $city){
//     echo "My name is $name age is $age and city is $city";
// }
// myInfo("Ekramul Islam",25,"Dhaka");


// Function null type hinting
// function myName(?string $name){
//     echo $name;
// }
// myName(null);


//Strict mode
// declare(strict_types=1);
// function myName(?string $name){
//     echo $name;
// }
//
// myName(123);


//Variadic function in Php/ Rest params in Js
// function sum(...$numbers){
//     $n=0;
//     $len=count($numbers);
//     for($i=0;$i<$len;$i++){
        
//         $n+=$numbers[$i];
        
//     } 
//     return $n;  
// }

// $result=sum(1,2,3,4,5);
// echo $result;


//Anonymous function
// $myFunction=function($name){
//     echo "I am anonymous $name";
// };
// $myFunction("function");


//Immediatly invoked function
// (function(){
//     echo "Hello World";
// })();


//Basic return types string,int,float,bool,void(faka)
// declare(strict_types=1);
// function add():int{
//     $n1=10;
//     $n2=20;
//     return $n1+$n2;
// }

// echo add()+20;


//Union/multiple return type
// function add():int|string|bool|float{
//     $n1=10;
//     $n2=20;
//     return $n1+$n2;
// }
// echo add()+20;


//Builtin/ Librery function
// echo strtoupper("Ekramul Islam");
// echo strtolower("Ekramul Islam");


//Recursive function
// function display($number) {
//     if($number<=5){
//      echo "$number <br/>";
//      display($number+1);
//     }
// }
//
// display(1);


//Callback function
// $numbers=array(1,2,3,4,5,6,7,8,9,10);
// function square($n){
//     echo "Square of $n is = ".$n*$n."<br>";
// }
// array_walk($numbers,"square");//Callback function
// echo "</br>";
// print_r($numbers);


