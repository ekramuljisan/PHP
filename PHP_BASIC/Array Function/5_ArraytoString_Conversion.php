<?php
//Associative Array to String Conversion - Serialize, json
$student = array(
    'fName'=>'Ekramul',
    'lName'=>'Islam',	
    'age'=>26,
    'city'=>'Dhaka',
    'country'=>'Bangladesh'   
);
//print_r($student);
//echo $student['fName']." ".$student['lName'];
//printf("%s %s",$student['fName'],$student['lName']);
//echo join(", ",$student);
//$serilized=serialize($student);
//echo $serilized;
//$newStudent=unserialize($serilized);

//Use json
$jsonData=json_encode($student);
//echo $jsonData;
$newStudent=json_decode($jsonData,true);
print_r($newStudent);