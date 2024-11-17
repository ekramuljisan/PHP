<?php
class student{
    public $name;
    public $age;
    function __construct($name,$age){
        $this->name=$name;
        if($age<4){
            throw new Exception("You are baby",1001);
        }else if($age>30){
            throw new Exception("You are old",1002);
        }
        $this->age=$age;
    }
    function __destruct(){
        echo $this->name." ".$this->age;
    }
}

try{
    $o=new Student("Ekram",5);
 }catch(Exception $e){
    echo $e->getCode().": ". $e->getMessage();
}