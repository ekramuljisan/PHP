<?php
//Final keyword use korar main reason jei class/method /property er age final keyword bosbe take ar child class a override kora jabe na
final class Father {
    
    final public function property(){
        echo "Some Property";
    }
    public function car(){
        echo "Some Car";
    }
}
  
  
class Child extends Father {
//     public function property(){
//         echo "Some Property";
//     }
}
$father=new Father();
$father->car();





