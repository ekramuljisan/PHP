<?php
// const vs. define()

// const are always case-sensitive
// define()  has a case-insensitive option.
// const cannot be created inside another block scope, like inside a function or inside an if statement.
// define can be created inside another block scope.

//Using define keyword
//define("Key","value");
//echo Key;
//
//define("Myinfo",array(
//    'Ekramul Islam',
//     25,
//    'roxenjisan@gmail.com'
//));

//var_dump(Myinfo);

// function call(){
//     return myInfo;
// }
// var_dump(call());


// Using const keyword
const Name="Ekramul Islam";
 function myName(){

     echo Name;
 }

 myName();






