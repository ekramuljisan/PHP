<?php
//file_get_contents()

if($_SERVER['REQUEST_METHOD']=="POST"){
    $result= file_get_contents("php://input");
    $a=json_decode($result,true);
    $add=$a['num1']+$a['num2'];
    $sub=$a['num1']-$a['num2'];
    $mul=$a['num1']* $a['num2'];
    $div=$a['num1']/$a['num2'];
    $newArr=["sum"=>$add,"sub"=>$sub,"mul"=>$mul,"div"=>$div];
    print_r($newArr);
}