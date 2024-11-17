<?php
// abstract jodi parent class er age use kora hoy ebong amra jodi parent class er obj make kore property or method call kora jay na
// abstract jei function/method gular age abstract keyword likha hoy oi function/method gula muloto child class a implement korai lagbe nahole child class error dibe
// Interfaces vs. Abstract Classes
// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time



// abstract class Car{
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro(): string;
// }
//
//
// class Audi extends Car{
//     public function intro(): string{
//         return "Choose German quality! I'm an $this->name!";
//     }
// }
//
// class Volvo extends Car{
//     public function intro(): string{
//         return "Proud to be Swedish! I'm a $this->name!";
//     }
// }
//
// class Citroen extends Car{
//     public function intro(): string{
//         return "French extravagance! I'm a $this->name!";
//     }
// }
//
//
// $audi = new audi("Audi");
// echo $audi->intro();
// echo "<br>";

// $volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo "<br>";

// $citroen = new citroen("Citroen");
// echo $citroen->intro();




// Abstract method with an argument/parameter
// abstract class ParentClass {
//     abstract protected function prefixName($name);
// }
//
// class ChildClass extends ParentClass {
// public function prefixName($name) {
//     if ($name == "John Doe") {
//        $prefix = "Mr.";
//     } elseif ($name == "Jane Doe") {
//        $prefix = "Mrs.";
//     } else {
//        $prefix = "";
//     }
//     return "{$prefix} : {$name}";
//
//     }
// }
//
// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "<br>";
// echo $class->prefixName("Jane Doe");



//Let's look at another example where the abstract method has an argument, and the child class has two optional arguments that are not defined in the parent's abstract method:
abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }

  class ChildClass extends ParentClass {
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "John Doe") {
        $prefix = "Mr";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }

  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");






