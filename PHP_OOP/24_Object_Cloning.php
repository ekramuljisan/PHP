<?php

class Person{
    function __construct(public $name){}
    function introduce(){
        return "My name is $this->name";
    }
}
$obj1=new Person("Ekram");
$obj2= clone $obj1;
$obj2->name="Ahsan";
echo $obj1->introduce();
echo "\n";
echo $obj2->introduce();
