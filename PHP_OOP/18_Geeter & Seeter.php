<?php
class PersonDetails{
    private $name;
    private $age;
    function setNameAge($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function getNameAge(){
        return "My name is $this->name & my age is $this->age";
    }
}
$obj=new PersonDetails();
$obj->setNameAge("Ekramul","22");
echo $obj->getNameAge();