<?php
//1. Static properties can be called directly without creating an instance/object of a class.
//2. Property er age static keyword thakle self keyword diye access korte hobe class er vitore $this->property/method eivabe access kora jane na


 class MyName{
     public static $name="Ekramul Islam";
     public static function input(){
         return "Hello from Ekramul Islam!";
     }
 }

 class Name extends MyName{
     public function output(){
         return self::$name;
     }
 }

 echo MyName::input();
 echo "<br/>";
 $new_name = new Name();
 echo $new_name->output();



//When use parent
//class MyName{
//    public static $name="Ekramul Islam";
//    public static function input(){
//        return "Hello from Ekramul Islam!";
//    }
//}
//
//class Name extends MyName{
//    public static function output(){
//        return parent::input();
//    }
//}
//
//echo Name::output();
//echo "<br/>";
//$new_name = new Name();
//echo $new_name->output();




