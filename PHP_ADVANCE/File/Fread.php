<?php
//File read ->fread()
// $filename="d:\Ekram\Ostad\PHP\PHP_ADVANCE\File/txt/f1.txt";
// $fp=fopen($filename,"r");
// $result=fread($fp,filesize($filename));
// echo $result;


//File read anotherway ->fread()
// $fp=fopen("d:\Ekram\Ostad\PHP\PHP_ADVANCE\File/txt/f1.txt","r");
// $result=fread($fp,filesize("d:\Ekram\Ostad\PHP\PHP_ADVANCE\File/txt/f1.txt"));
// echo $result;


//File read anotherway ->fread()
$file=fopen("d:\Ekram\Ostad\PHP\PHP_ADVANCE\File/txt/f1.txt","r");
$line= fgets($file);
echo $line;
$line= fgets($file);
echo $line;
$line= fgets($file);
echo $line;


//File read anotherway ->fread()
// $myfile = file_get_contents("d:\Ekram\Ostad\PHP\PHP_ADVANCE\File/txt/f1.txt");
// echo $myfile;
// echo "\n\n";
// $unserialize_data=unserialize($myfile);
// print_r($unserialize_data);
//a:4:{s:5:"fname";s:7:"Ekramul";s:5:"lname";s:5:"Islam";s:3:"age";i:25;s:4:"city";s:5:"Dhaka";}


//File read anotherway ->fread()
// $website_data=file_get_contents("https://postman-echo.com/get?form=ostad");
// $result=json_decode($website_data);
// print_r($result);
