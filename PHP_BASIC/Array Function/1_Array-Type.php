<?php
//There are three types of array in php


// 1. Indexed array
//$myInfo = array(
//    "ekramulislam",
//    "roxenjisan@gmail.com",
//    "123",
//);

//$myInfo[] = "01852283308";//Add new item
//array_push($myInfo,"Sonagazi","Feni");//Add twice item
//$myInfo[0] = "ahsanulislam";(Change the value of an array)
//echo $myInfo[2].'</br>';
//print_r($myInfo);

//$c = count($myInfo);
// for($x = 0; $x < $c; $x++) {
//     echo $myInfo[$x].'</br>';
// }

// for ($x = $c-1; $x >= 0; $x--) {
//     echo $myInfo[$x].'</br>';
// }


// $cars = [
//   "Volvo",
//   "BMW",
//   "Toyota",
// ];
// $cars[0]="Mercedes";(Change the value of an array)
//forEach($cars as $key => $value){
//     echo $value."</br>";
//}



// 2. Associative array
// $subjectMarks = array(
//     'Bangla' => 80,
//     'English' => 90,
//     'Math' => 70,
//     'Science' => 80,
// );
// $subjectMarks["English"] = 85;//Modify value
//$subjectMarks["Social_Science"] = 75;//Add new item
//$subjectMarks += ["Social_Science" => 75, "Religion" => 70];;//Add twice item
//print_r($subjectMarks);
// echo $subjectMarks["English"]."<br/>";
// $totalValueCount = count($subjectMarks);

// foreach($subjectMarks as $key=> $totalMarks){
//     echo $key."= ".$totalMarks."</br>";
// }


// $myCar = [
//   "brand" => "Ford,Mercedes,Audi",
//   "model" => "Mustang,BMW,Saab",
//   "year" => "1993, 1995, 2000",
// ];
//$myCar["year"].= ", 1999";//Add new value
//$keys=array_keys($myCar);
//print_r($keys);
//print_r($myCar);
// for($i=0;$i<count($keys);$i++){
    //echo $myCar[$keys[$i]]."</br>";
// }

// foreach($myCar as $key => $value) {
//     echo "$key: $value.</br>";
// }



// 3. Multidimentional array
// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Range Rover",17,15),
//     array("Toyota",1,5)
// );

//array_push($cars,"Pajero",15,10);
//print_r($cars);
//echo "</br>". $cars[3][2];
// echo $cars['0']['0'];
// echo '</br>';
// echo $cars['1']['0'];
// echo '</br>';


 $personInfo = array(
     "amarNam" => "ekramulislam",
     "amarVaiErDetails" =>array(
     "vaiName" => "ahsanulislam",
     "vaiAge" => "25",
     "vaiHobby" => "Gardening",
     "amarBabarDetails" => array(
     "babarNam" => "zahirulislam",
     "babarAge" => "50",
     ),
     ),
 );


// echo $personInfo["amarVaiErDetails"]["vaiAge"];
// echo "</br>";
// echo $personInfo["amarVaiErDetails"]["amarBabarDetails"]["babarNam"];
//print_r($personInfo['amarVaiErDetails']["amarBabarDetails"]['babarAge']);

