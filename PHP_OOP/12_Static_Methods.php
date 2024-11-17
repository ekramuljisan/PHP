<?php
//Static methods can be called directly without creating an instance of the class first.

// class MyName{
//     public static $name="Ekramul Islam";
//     public static function input(){
//         return "Hello from Ekramul Islam!";
//     }
// }

// class Name extends MyName{
//     public static function output(){
//         return self::$name;         
//     }
// }

// echo MyName::input();
// echo "\n";
// $new_name = new Name();
// echo $new_name->output();


//Static methods can also be called from methods in other classes. To do this, the static method should be public
// class A {
//     public static function welcome() {
//       echo "Hello World!";
//     }
// }
  
// class B {
//     public function message() {
//       A::welcome();
//     }
// }
  
// $obj = new B();
// echo $obj -> message();


//To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.
// class domain {
//     protected static function getWebsiteName() {
//       return "W3Schools.com";
//     }
// }
  
// class domainW3 extends domain {
//     public $websiteName;
//     public function __construct() {
//       $this->websiteName = parent::getWebsiteName();
//     }
// }
  
// $domainW3 = new domainW3;
// echo $domainW3 -> websiteName;



