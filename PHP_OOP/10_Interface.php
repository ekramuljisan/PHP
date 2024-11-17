<?php
//Interface a jei method gula thakbe oigula child class gulate implement kortei hobe nahole error dibe

// Interfaces vs. Abstract Classes
// Interfaces cannot have properties, while abstract classes can have
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time


interface Fixedmethod{
    public function deposit();
    public function withdraw();
}

class Mainbranch implements Fixedmethod{
    public function deposit(){
        echo "kono charge nai deposit korte";
    }
    public function withdraw(){
        echo "kono charge nai withdraw korte";
    }
}

class Shakabranch implements Fixedmethod{
    public function deposit(){
        echo "Charge dite hobe deposit korte!";
    }
    public function withdraw(){
        echo "Charge dite hobe withdraw korte!";
    }
}

function result(Fixedmethod $output){
    $output->deposit();
    echo "\n";
    $output->withdraw();
}

$deposit_user = new Shakabranch();
result($deposit_user);


interface Animal {
    public function makeSound();
}

// Class definitions
class Cat implements Animal {
    public function makeSound() {
        echo " Meow ";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
    $animal->makeSound();
}
