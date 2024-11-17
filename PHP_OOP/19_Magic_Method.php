<?php
//__get(), __set() , __toString(), __construct, __destruct, __clone eigula magic method ostad 2 hours er class
class Person{
    private $name;
    private $age;
    function __construct($name,$age,$email){
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
    }
    function __toString(){
        return "My name {$this->name} and my age {$this->age} and email is {$this->email}" ;
    }
    function __get($key){
        return $this->$key;
    }
    function __set($key, $value){
        return $this->$key=$value;
    }
    
}
//$obj=new Person("Ekram","22","roxenjisan@gmail.com");
$obj=new Person("Ekram","22","roxenjisan@gmail.com");
$obj->name="Ahsan";
$obj->age="22";
echo $obj;
