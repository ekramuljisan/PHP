<?php
//Inheritence means,The child class will inherit all the public and protected properties and methods from the parent class



 class Father{
     public function sum($n1,$n2){
         echo $n1+$n2;
     }
 }

 class Child extends Father{
    
 }

 $newObj= new Child();
 echo $newObj->sum(1,2);


//class Shape{
//    protected $name;
//    protected $area;
//    public function __construct($name){
//        $this->name=$name;
//        $this->calculateArea();
//    }
//    function getArea(){
//        echo "This {$this->name}'s area is {$this->area} ";
//    }
//    public function calculateArea(){}
//}
//
//class Rectangle extends Shape{
//    private $a,$b;
//    public function __construct($a,$b){
//        $this->a=$a;
//        $this->b=$b;
//        parent:: __construct("Rectangle");
//    }
//    public function calculateArea(){
//        $this->area=$this->a*$this->b;
//    }
//}
//
//$obj=new Rectangle(10,12);
//$obj->getArea();


//Constructor with inheritance
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getFruit() {
        return "The fruit is {$this->name} and the  fruit color is {$this->color}.";
    }
}

class Strawberry extends Fruit {
    public function message() {
        return "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
echo $strawberry->getFruit()."<br/>";
echo $strawberry->message();