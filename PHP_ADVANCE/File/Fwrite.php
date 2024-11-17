<?php
//File write->fwrite() "a" mode a khulle ager data gula soho write hobe.
// $filename="file/txt/f2.txt";
// $fp=fopen($filename,"a");
// fwrite($fp,"Hello World\n");
// fclose($fp);



//file_put_contents()
// $person=[
//     'fname'=>"Ekramul",
//     'lname'=>"Islam",
//     'age'=>25,
//     'city'=>"Dhaka"
// ];
$person = [
    [
    'fname' => 'Ekramul',
    'lname' => 'Islam',
    'age' => 25,
    'city' => 'Dhaka'
    ],
    [
    'fname' => 'Ahsanul',
    'lname' => 'Islam',
    'age' => 25,
    'city' => 'Dhaka'
    ],
    [
    'fname' => 'Jahirul',
    'lname' => 'Islam',
    'age' => 25,
    'city' => 'Dhaka'
    ]
];
// $serialize=serialize($person);
// file_put_contents("file/txt/f2.txt",$serialize,FILE_APPEND);
// $read=file_get_contents("file/txt/f2.txt");
// $arr=unserialize($read);
// print_r($arr);

$json=json_encode($person,JSON_PRETTY_PRINT);
//echo $json;
file_put_contents("file/txt/f2.txt",$json);
$json_decode=json_decode($json,true);
print_r($json_decode);

// $filename="d:\Ekram\Ostad\PHP\PHP_ADVANCE\File/txt/f2.txt";
// $fp=fopen($filename,"r+");
// $line = fgets($fp);
// echo $line;
// fwrite($fp,"Uranus");
// $line = fgets($fp);
// echo $line;
// fclose($fp);
