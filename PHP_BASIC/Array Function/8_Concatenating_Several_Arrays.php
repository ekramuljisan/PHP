<?php
$fruits=array("apple","banana","mango","orange","grapes");
$random=array("a"=>12,"b"=>13,"c"=>14,"d"=>15,"e"=>16);

// $newFruits1=array_slice($fruits,0,3);
// $newFruits2=array_slice($fruits,3,2,true);
// $newFruits=array_merge($newFruits1,$newFruits2);
// print_r($newFruits1);
// echo "</br>";
// print_r($newFruits2);
// echo "</br>";
// print_r($newFruits);
// echo "</br>";
// $newFruitsPlus=$newFruits1+$newFruits2;
// print_r($newFruitsPlus);
// $randomData=array_splice($random,2,2,array("f"=>17,"g"=>18));
// print_r($randomData);
// echo "</br>";
// print_r($random);

$a1=array_slice($random,0,3,true);
$a2=array_slice($random,3,2,true);
$a3=array("f"=>17,"g"=>18);
$result=$a1+$a2+$a3;
print_r($result);
