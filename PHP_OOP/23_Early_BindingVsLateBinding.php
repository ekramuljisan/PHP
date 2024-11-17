<?php
//self use hole early binding & static use hole late binding
class Planet{
    static function echoName(){
        echo static::getName();
    }
    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}

$p=new Earth();
$p->echoName();