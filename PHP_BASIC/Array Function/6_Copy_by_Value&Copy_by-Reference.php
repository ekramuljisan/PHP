<?php
//Copy by value ->Deep copy
// $person=array(
//     "first_name"=>"Ekramul",
//     "last_name"=>"Islam",
//     "age"=>26,
//     "city"=>"Dhaka",
// );
// $newPerson= $person;
// $newPerson["city"]="Chittagong";
// print_r($person);
// print_r($newPerson);

//Copy by reference->Shallow copy
// $person=array(
//     "first_name"=>"Ekramul",
//     "last_name"=>"Islam",
//     "age"=>26,
//     "city"=>"Dhaka",
// );
// $newPerson=& $person;
// $newPerson["city"]="Chittagong";
// print_r($person);
// print_r($newPerson);

//Use function
// $person=array("first_name"=>"Ekramul","last_name"=>"Islam","age"=>26,"city"=>"Dhaka",);

// function change(&$person){//& use korle original variable er man tao change hoye jabe;
//     $person["city"]="Chittagong";
//     print_r($person);
// }
// change($person);
// print_r($person);