<?php
//Indexed array
//String to Array use explode() (Delemiters->", ")
// $vegetables="Potato, Tomato, Cucumber, Carrot";
// $result=explode(", ", $vegetables);
// print_r($result);


// echo count($vegetables);
// echo "</br>" . $vegetables[1];


//String to array use unserialize()
// $vegetables = "Potato, Tomato, Cucumber, Carrot";
// $result = unserialize($vegetables);
// print_r($result);


//String to array use json_decode()
// $vegetables = "Potato, Tomato, Cucumber, Carrot";
// $result = json_decode($vegetables);
// print_r($result);

//Array to String use join()
// $vegetables=["Potato", "Tomato", "Cucumber", "Carrot"];
// $result=join(", ", $vegetables);
// echo $result;


//Array to String use implode()
// $vegetables=["Potato", "Tomato", "Cucumber", "Carrot"];
// $result=implode(", ", $vegetables);
// echo $result;


//Array to string use serialize()
// $vegetables = ["Potato", "Tomato", "Cucumber", "Carrot"];
// $result = serialize($vegetables);
// echo $result;

//Array to string use json_encode()
// $vegetables=["Potato", "Tomato", "Cucumber", "Carrot"];
// $result=json_encode($vegetables);
// echo $result;



//Associative array
//A.array to string use serialize()
// $vegetables=[
//     'fname'=>"Ekramul",
//     'lname'=>"Islam",
//     'age'=>25
// ];
// $result = serialize($vegetables);
// echo $result;


//A.array to string use json_encode()
$vegetables=[
    'fname'=>"Ekramul",
    'lname'=>"Islam",
    'age'=>25,
    'city'=>"Dhaka"
];

$result=json_encode($vegetables);
echo $result ."\n";
$a=json_decode($result,true);
print_r($a);







