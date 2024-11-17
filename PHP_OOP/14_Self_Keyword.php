<?php
//1. Static properties can be called directly without creating an instance/object of a class.
//2. Property er age static keyword thakle self keyword diye access korte hobe class er vitore $this-> eivabe hobe na access  
class MyName{
    private static $name="Ekramul Islam";
    public static function output(){
        echo self::$name;         
    }
}

MyName::output();
echo "\n";
// $new_name = new MyName();
// echo $new_name->output();
