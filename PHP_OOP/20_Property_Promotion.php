<?php

class Person{
    //To reduce code you can implement this technique.
    // public $name;
    // public $age;
    // public $email;
    public function __construct(public $name,public $age,public $email){}
    function introduce(){
        return "My name is $this->name my age is $this->age and my email is $this->email"; 
    }
}

$obj=new Person("Ekramul","22","roxen@gmail.com");
echo $obj->introduce();
