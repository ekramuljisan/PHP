<?php

//Set session store
if($_SERVER['REQUEST_METHOD']=="POST"){
    $result= file_get_contents("php://input");
    $j=json_decode($result,true);
    session_start([
        'cookie_lifetime' => 60
    ]);
    $_SESSION['data']=$j;
    echo "Success";
}


//Read session store
if($_SERVER['REQUEST_METHOD']=="GET"){
    session_start();
    echo $_SESSION['data']['username'];
}

//Delete session store
if($_SERVER['REQUEST_METHOD']=="DELETE"){
    session_start();
    unset($_SESSION['data']['username']);
    session_destroy();
    echo "Deleted";
    
}



