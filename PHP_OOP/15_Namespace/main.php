<?php

include_once("Dog.php");
include_once("Cat.php");

use \Animals\Name\Dog;
use \Animals\Name\Cat;

$dog = new Dog();
echo $dog->greet()."<br/>";
//echo $dog->name."\n";

$cat = new Cat();
echo $cat->greet();



