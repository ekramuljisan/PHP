<?php
class MyException extends Exception{};
class NetwordException extends Exception{};


function testException(){
    throw new NetwordException();
}

try{
    testException() ;
}catch(MyException $e){
    echo "MyException";
}catch(NetwordException $e){
    echo "NetwordException";
}finally{
    echo "\nCleaned up";
}