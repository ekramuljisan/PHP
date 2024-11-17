<?php
//Characteristics of Constructor Function
//1. It can take parameter
//2. It executed automatically at first
//3. It can't use return 
//4. It set the property
//5. It can change Properties value using constructor parameter


//class Car{
//    public $color="red";
//
//    public function __construct(){
//        echo "Auto light on, Auto sensor on, Auto pilot on";
//    }
//
//    public function driving(){
//        return "I am driving";
//    }
//
//    public function washing(){
//        return "I am washing";
//    }
//}
//
//$obj=new Car();


//Properties value change using constructor parameter
//class Car{
//    public function __construct($newColor){
//        $this->color=$newColor;
//    }
//    public $color="red";
//    public function drive(){
//        return "I am driving";
//    }
//    public function wash(){
//        return "I am washing";
//    }
//}
//$car=new Car("Green");
//echo $car->color;


// class Car{
//     public $color;
//     public function __construct($color){
//         $this->color=$color;
//     }
//     public function getColor(){
//       return $this->color;
//     }
// }
// $car=new Car("Red");
// echo $car->getColor();


//class Fruit {
//    public $name;
//    public $color;
//
//    function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//    function get_name() {
//        return $this->name;
//    }
//    function get_color() {
//        return $this->color;
//    }
//}
//
//$apple = new Fruit("Apple", "red");
//echo $apple->get_name();
//echo "<br>";
//echo $apple->get_color();













