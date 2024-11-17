<?php
//Cookie set
if($_SERVER['REQUEST_METHOD']=="POST"){
    $result= file_get_contents("php://input");
    $a=json_decode($result,true);
    setcookie("username",$a['username'],["expires"=>time()+3000]);
    echo "Success";
}

//Cookie Delete
if($_SERVER['REQUEST_METHOD']=="DELETE"){
    setcookie("username",$a['username'],["expires"=>time()-3000]);
    echo "Deleted";
}