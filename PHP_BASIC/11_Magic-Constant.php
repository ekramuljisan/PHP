<?php
//__CLASS__
// class Myname{
//     public function myValue(){
//         return __CLASS__;
//     }
// }

// $value = new Myname();
// echo $value->myValue();

//__DIR__
// echo __DIR__;

//__FILE__
// echo __FILE__;

//__FUNCTION__

// function myName(){
//     return __FUNCTION__;
// }
// echo myName();

//__LINE__
// echo __LINE__;

//__METHOD__
// class Myname{
//     public function myValue(){
//         return __METHOD__;
//     }
// }

// $value = new Myname();
// echo $value->myValue();

//__NAMESPACE__

// namespace myArea;
// function myValue(){
//   return __NAMESPACE__;
// }
// echo myValue();

//__TRAIT__

trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();











?>