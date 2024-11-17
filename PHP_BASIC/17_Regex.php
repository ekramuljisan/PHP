<?php

//Using preg_match()
$str="I am Ekramul Islam";
$pattern="/Ekramul Islam/i";
echo preg_match($pattern,$str);

//Using preg_match_all()
$str="I am Ekramul Islam I am Ekramul Islam I am Ekramul Islam";
$pattern="/Ekramul Islam/i";
echo preg_match_all($pattern,$str);

//Using preg_replace()
$str = "I am Ekramul Islam";
$pattern = "/Ekramul Islam/i";

echo preg_replace($pattern,"Jisan",$str);



