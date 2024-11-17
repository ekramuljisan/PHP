<?php

//public, the property or method can be accessed from everywhere.
// class MyInfo{
//     public $name = "Ahsan";

//     public function setInfo($name){
//         $this->name = $name;
//     }
//     public function getInfo(){
//         return $this->name;
//     }
// }

// class MyOther extends MyInfo{ 
    
// }
// $MyOther = new MyOther();
// echo $MyOther->name="Ekram";//Reasign kora jay property ka
// echo $MyOther->getInfo();




//protected, the property or method can be accessed within the class and other derived class
//protected, the property can not be reassign outside of the class
// class Flower {
//     protected $name = "Belly";
//     protected $color = "White";
//     protected function setMethod($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function getMethod() {
//         echo "The flower is {$this->name} and the color is {$this->color}.";
//     }
// }
//
// class Strawberry extends Flower {
//     public  function message() {
//     // Call protected method from within derived class
//         $this -> getMethod();
//     }
// }
//
//$flower = new Flower();
////echo $flower->name="Lily";//Reasign kora jay na property ka
////$flower->setMethod("Rose","Red");
//$flower->getMethod();
//$strawberry =new Strawberry();
//$strawberry->message(); // OK. message() is public and it calls getMethod() (which is protected) from within the derived class



 class Fruit {
     protected $name;
     protected $color;
     protected function setMethod($name, $color) {
         $this->name = $name;
         $this->color = $color;
     }
     protected function intro() {
         echo "The fruit is {$this->name} and the color is {$this->color}.";
     }
 }
  
 class Strawberry extends Fruit {
     public function message() {
         echo "Am I a fruit or a berry? ";
         // Call protected function from within derived class
         $this -> intro();
     }
 }
 $strawberry = new Strawberry("Strawberry","red");// __construct() is public
 echo "<br/>";
 $strawberry->message();//message() is public and it calls intro() (which is protected) from within the derived class




//private, the property or method can Only be accessed within the class
//class Flower {
//    private $name="Sunflower";
//    private $color="Yellow";
//
//    private function setMethod($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//
//    private function intro() {
//        return "The flower is {$this->name} and the color is {$this->color}.";
//    }
//}
//
//class Strawberry extends Flower {
//    public function message() {
//        $this->intro();
//    }
//}
    
//$flower = new Flower();
//$flower->setMethod("Sunflower","Yellow");//bahirer theka value set kora jay na
//$flower->name= "Jasmine";//Property reasign kora jay na
//echo $flower->intro();
//$strawberry = new Strawberry("Strawberry","red","");
//echo $strawberry->message();
