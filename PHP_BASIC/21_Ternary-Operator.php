<?php
//if=>? & else=>:
// $age=2;
// $msg="";
// $age>=18?($msg="You are adult"):($msg="You are Child");
// echo $msg;


//Nested ternary opertor

$score=50;
$grade="";

$score>=90?$grade="A":($score>=80?($grade="B"):($score>=70?($grade="C"):($score>=60?($grade="D"):($score>=50?($grade="D"):($grade="F")))));
echo $grade;



// $x = 5;

// $y = ($x > 10) ? "Greater than 10" : (($x < 5) ? "Less than 5" : "Between 5 and 10");

// echo $y;