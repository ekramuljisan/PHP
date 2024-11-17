<?php
function getNumbers(){
    $numbers=[1,2,3,4,5];
    return $numbers;
}

list($a,$b,$c,$d,$e)= getNumbers();
echo $a."<br/>".$b."<br/>".$c."<br/>".$d."<br/>".$e;
