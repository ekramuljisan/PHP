<?php

//1. strlen() function returns the length of a string.
// $x="Ekramul Islam";//13=Start from 1.
// echo strlen($x);


//2. str_word_count() function counts the number of words in a string.
// $x="Ekramul Islam";
// echo str_word_count($x);


//3. strpos() function searches for a specific text within a string.
// $x="Quick brown fox jumps over the lazy dog";
// echo strpos("$x","fox");//Case sensitive


//4. strrpos() function searches for a specific text within a string reverse.
// $x="Quick brown fox jumps over the lazy dog";
// echo strrpos("$x","lazy");//Case sensitive


//5. stripos() function searches for a specific text within a string.
// $x="Quick brown Fox jumps over the lazy dog";
// echo stripos("$x","fox");//Case insensitive


//6. strripos() function searches for a specific text within a string.
// $x="Quick brown fox jumps over the lazy dog";
// echo strripos("$x","o");//Case insensitiv


//7. ucfirst() function returns the string in first word first letter is capital:
// $x="ekramul islam";
// echo ucfirst("$x");


//8. strtoupper() function returns the string in upper case:
// $x="ekramul islam";
// echo strtoupper($x);


//9. strtolower() function returns the string in upper case:
// $x="EKRAMUL ISLAM";
// echo strtolower($x);


//10. ucwords() function returns the string in capitalize:
// $x="ekramul islam";
// echo ucwords($x);


//11. str_replace() function replaces some characters with some other characters in a string.
// $x="Ekramul Islam Jisan";
// // echo str_replace('Islam','Jisan',$x);
// echo str_replace(array('Ekramul','Jisan'),array('Ahsanul','Sejan'),$x);

//12. str_ireplace() function replaces some characters with some other characters in a string.
// $x="Ekramul Islam islam";
// echo str_ireplace('Islam','Jisan',$x,$count);
// echo PHP_EOL;
// echo $count;


//13. strrev() function reverses a string.
// $x="Ekramul Islam";
// echo strrev($x);


//14. trim() removes any whitespace from the beginning or the end:
// $x=" Ekramul Islam ";
// echo "<input value='" . $x . "'>";
// echo "<br>";
// echo "<input value='" . trim($x) . "'>";


//15. ltrim() removes any whitespace from the beginning:
// $x=" Ekramul Islam ";
// $result=ltrim($x);
// echo $result;

//16. rtrim() removes any whitespace from the end:
// $x=" Ekramul Islam ";
// $result=rtrim($x);
// echo $result;


//17. explode() function splits a string into an array.
// $x="Hello World,World How are you";
// $y=explode(",",$x);
// print_r($y);


//18. join() function joins the elements of an array into a string.
// $x="Hello World,World How are you";
// $y=explode(" ",$x);
// print_r($y);
// echo PHP_EOL;
// $z=join(" ",$y);
// print_r($z);


//19. implode() function joins the elements of an array into a string.
// $x="Hello World,World How are you";
// $y=explode(" ",$x);
// print_r($y);
// echo PHP_EOL;
// $z=implode(" ",$y);
// print_r($z);


//20. str_split() function splits a string into an array.
// $string="HelloWorldHowAreYou";
// $r =str_split($string);
// print_r($r);


//21. strtok() function searches for a specific text within a string.
// $string="Hello World,World How are you";
// $token=strtok($string," ");
// while($token!==false){
//     echo $token."\n";
//     $token=strtok(" ");
// }


//22. preg_split()
// $string="Hello World,World How are you";
// $z=preg_split("/ |,/",$string);
// print_r($z);


//23. wordwrap()
// $para="Lorem ipsum dolor sit ametaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, consectetur adipisicing elit, sed do eiusmod";
// $result=wordwrap($para,25,"\n",true);
// echo $result;


//24. nl2br()
// $para="Lorem ipsum dolor\n sit ametaaaaaaaaaaaaaaaaa\naaaaaaaaaaaa, consectetur adipisicing\n elit, sed do eiusmod";
// echo nl2br($para, true);


//25. sscanf()
// $name="Ekramul Islam 01852283308";
// $parts=sscanf($name,"%s %s %s",$fname,$lname,$phone);
// echo $fname;