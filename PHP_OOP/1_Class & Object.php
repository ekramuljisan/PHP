<?php /*      ***** Rabbil Hasan Ostad W-C & W3schools.com *****       */


//Create Class
// class Car{
//     public $color = "red";
//
//     public function driving(){
//         echo "I am driving";
//     }
//     public function washing(){
//        echo "I am washing";
//     }
// }

// //Create Object/Instance
// $c1 = new Car();
// echo $c1->color;
// $c1->driving();
// $c1->washing();

//class Fruit {
//    // Properties
//    public $name;
//    public $color;
//
//    // Methods
//    function set_name($name) {
//        $this->name = $name;
//    }
//    function get_name() {
//        return $this->name;
//    }
//    function set_color($color) {
//        $this->color = $color;
//    }
//    function get_color() {
//        return $this->color;
//    }
//}
//
//$apple = new Fruit();
//$apple->set_name('Apple');
//$apple->set_color('Red');
//echo "Name: " . $apple->get_name();
//echo "<br>";
//echo "Color: " . $apple->get_color();


 class Course{
     public $course_name;
     public $course_fee;
     public $course_outline;
     public $course_duration;

     public function set_course_details($name, $fee, $outline, $duration){
         //$course_name = "Web Design";
         $this->course_name = $name;
         $this->course_fee = $fee;
         $this->course_outline = $outline;
         $this->course_duration = $duration;
     }

     public function get_course_details(){
         return "The course name is {$this->course_name } The course fee is {$this->course_fee} The course outline is {$this->course_outline} The course duration is {$this->course_duration}"  ;
     }

 }
 $course = new Course();
 $course->set_course_details("wordpress", "20k", "html,css", "6month");
 echo $course->get_course_details();



