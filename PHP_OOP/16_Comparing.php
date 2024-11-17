<?php
class Person{
    function __construct(public $name, public $age){}
}
$p1=new Person("Ekram",22);
$p2=new Person("Ekram",22);
if($p1===$p2){
    echo "Same";
}
else{
    echo"Not Same";
}