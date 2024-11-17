<?php
//Some Array functions/ Built-in function


//1. array_change_key_case()

// $subjectMarks = array(
//     'Bangla' => 80,
//     'English' => 90,
//     'Math' => 70,
//     'Science' => 80,

// );

// $useUppercase = array_change_key_case($subjectMarks,CASE_UPPER);

// foreach($useUppercase as $key=> $totalMarks){
//     echo $key."= ".$totalMarks."</br>";
// }


//2. array_chunk()

// $subjectMarks = array(
//     'Bangla' => 80,
//     'English' => 90,
//     'Math' => 70,
//     'Science' => 80,

// );

// $takeSplit = array_chunk($subjectMarks, 2);

// echo var_dump($takeSplit);


//3. array_column()

// $studentDetails = array(

//     array(
//         'id' => 1,
//         'first_name' => 'Ekramul',
//         'last_name' => 'Islam',
//       ),
//       array(
//         'id' => 2,
//         'first_name' => 'Ahsanul',
//         'last_name' => 'Islam',
//       ),
//       array(
//         'id' => 3,
//         'first_name' => 'Zahirul',
//         'last_name' => 'Islam',
//       )

//     );

//   $userId = array_column($studentDetails,"first_name","id");

// print_r($userId);


//4. array_combine()Two indexed arrays convert into a associative array
// $userId = array("1","2","3");
// $userName = array("Ekramul Islam","Ahsanl islam","Zahirul Islam");

// $array_com_aso = array_combine($userId,$userName);

// print_r($array_com_aso );


//5. array_count_values()

// $userName = array("Ekramul Islam","Ahsanl islam","Zahirul Islam");
// $arr_cou_val = array_count_values($userName);
// print_r($arr_cou_val);


//6.array_diff($a1 er jei valuegula $a2 er modde nai oigula asbe) 

// $a1=array(
//     "a"=>"red",
//     "b"=>"green",
//     "c"=>"blue",
//     "d"=>"yellow"
// );
// $a2=array(
//     "e"=>"red",
//     "f"=>"purple",
//     "g"=>"blue"
// );
//
// $result=array_diff($a1,$a2);
// print_r($result);


//7. array_diff_assoc($a1 er jei gula $a2 er modde nai oigula asbe key ar value check dibe) 

// $a1=array(
//     "a"=>"red",
//     "b"=>"green",
//     "c"=>"blue",
//     "d"=>"yellow"
// );
// $a2=array(
//     "a"=>"red",
//     "f"=>"green",
//     "g"=>"blue"
// );

// $result=array_diff_assoc($a1,$a2);
// print_r($result);


//8.array_diff_key() difference between key

// $a1=array(
//     "a"=>"red",
//     "b"=>"green",
//     "c"=>"blue",
// );
// $a2=array(
//     "a"=>"red",
//     "f"=>"green",
//     "c"=>"blue"
// );

// $result=array_diff_key($a1,$a2);
// print_r($result);


//9. array_fill()

// $a1=array_fill(1,4,"ekramulislam");

// print_r($a1);


//10. array_fill_keys()

// $a1 =array(10,1,5,4);
// $a2=array_fill_keys($a1,"ekramulislam");

// print_r($a2);


//11. array_filter()


//12. in_array()

    // $people = array("ekram", "ahsan", "jisan", "sajjad");

    // if (in_array("ekram", $people))
    // {
    // echo "Match found";
    // }
    // else
    // {
    // echo "Match not found";
    // }


//13. array_flip()

    // $a1=array(
    //     "a"=>"red",
    //     "b"=>"green",
    //     "c"=>"blue",
    //     "d"=>"yellow"
    // );

    // $result=array_flip($a1);

    // print_r($result);



//14. array_intersect(Compare the values of two arrays, and return the common elements: )

    // $a1=array(
    //     "a"=>"red",
    //     "b"=>"green",
    //     "c"=>"blue",
    //     "d"=>"yellow"
    // );

    // $a2=array(
    //     "f"=>"red",
    //     "g"=>"green",
    //     "h"=>"blue",
    //     "i"=>"yellow"
    // );

    // $result=array_intersect($a1,$a2);

    // print_r($result);

//15. array_intersect_assoc(Compare the keys and values of two arrays, and return the common keys and values:)

    //     $a1=array(
    //         "a"=>"red",
    //         "b"=>"green",
    //         "c"=>"blue",
    //         "d"=>"yellow"
    //     );

    //     $a2=array(
    //         "a"=>"red",
    //         "b"=>"green",
    //         "e"=>"blue",
    //         "f"=>"yellow"
    //     );

    // $result=array_intersect_assoc($a1,$a2);

    // print_r($result);


//16. array_intersect_key()

// $a1=array(
//     "a"=>"red",
//     "b"=>"green",
//     "c"=>"blue",
//     "d"=>"yellow"
// );

// $a2=array(
//     "a"=>"red",
//     "b"=>"green",
//     "e"=>"blue",
//     "f"=>"yellow"
// );

// $result=array_intersect_key($a1,$a2);

// print_r($result);


//17. array_shift(Delete the first element of an array)
// $a = array(
//     "red",
//     "green",
//     "blue"
// );
// array_shift($a);
// print_r($a);


//18. array_unshift(values will be inserted in the beginning of the array.)
// $a = array(
//     "red",
//     "green",
//     "blue"
// );
// array_unshift($a,"yellow");
// print_r($a);


//19. array_pop(Delete the last element of an array)
// $a = array(
//     "red",
//     "green",
//     "blue"
// );
// array_pop($a);
// print_r($a);


//20. array_push(values will be inserted in the ending of the array.)
// $a = array(
//     "red",
//     "green",
//     "blue"
// );
// array_push($a,"yellow");
// print_r($a);

//Another way to insert values in the ending of the array
// $a = array(
//     "red",
//     "green",
//     "blue"
// );
// $a[]="yellow";
// print_r($a);


//21. array_slice(Extract a part of an array)
// $fruits=array("orange","banana","apple","mango","pineapple");
// $a=array_slice($fruits,2,-1,true);
// print_r($a);
// print_r($fruits);

// $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
// $a=array_slice($a,1,-2);
// print_r($a);


//22. array_splice(Remove values from an array)
 $fruits=array("orange","banana","apple","mango","pineapple");
 $newFruits=array("guava","strawberry","kiwi");
 $result=array_splice($fruits,2,-1,$newFruits);
 print_r($result);
// echo "</br>";
// print_r($fruits);


//23. sort(sort arrays in ascending order mane a-b-c-d-e-etc)
// $fruits=array("orange","banana","apple","mango","pineapple");
// sort($fruits);
// print_r($fruits);
// echo "</br>";
// $numbers = array(4, 6, 2, 22, 11);
// sort($numbers);
// print_r($numbers);

//24. rsort(sort arrays in descending order mane e-d-c-b-a-etc)
// $fruits=array("orange","banana","apple","mango","pineapple");
// rsort($fruits);
// print_r($fruits);
// echo "</br>";
// $numbers = array(4, 6, 2, 22, 11);
// rsort($numbers);
// print_r($numbers);


//25. asort(sort associative arrays in ascending order,according to the value)
// $age = array("Peter"=>"37", "Ben"=>"35", "Joe"=>"43");
// asort($age);
// print_r($age);


//26. arsort(sort associative arrays in descending order,according to the value)
// $age = array("Peter"=>"37", "Ben"=>"35", "Joe"=>"43");
// arsort($age);
// print_r($age);


//27. ksort(sort associative arrays in ascending order,according to the key)
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// ksort($age);
// print_r($age);

//28. krsort(sort associative arrays in descending order,according to the key)
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// krsort($age);
// print_r($age);


//29. in_array(To check if a value exists in an array)
// $fruits=array("orange","banana","apple","mango","pineapple");
// if(in_array("apple",$fruits)){
//     echo "Apple is exits in the array";
// }
// else{
//     echo "Not found";
// }


//30. array_search(To search for a value in an array)
// $fruits=array("orange","banana","apple","mango","pineapple");
// echo array_search("apple",$fruits);


//31. key_exists(To check if a key exists in an array)
// $fruits=array("a"=>"orange","b"=>"banana","c"=>"apple","d"=>"mango","e"=>"pineapple");
// if(key_exists("a",$fruits)){
//     echo "Key a exits in the array";
// }
// else{
//     echo "Not found";
// }


// 32. array_walk(One kind of Callback function)
// $numbers=array(1,2,3,4,5,6,7,8,9,10);
// function square($n){
//     echo "Square of $n is = ".$n*$n."<br>";
// }
// array_walk($numbers,"square");//Callback function
// echo "</br>";
// print_r($numbers);

//$numbers=array(1,2,3,4,5,6,7,8,9,10);
// function cube($n){
//     echo "Cube of $n is = ".$n*$n*$n."<br>";
// }
// array_walk($numbers,"cube");//Callback function
// echo "</br>";
// print_r($numbers);


//33. array_map()

// $numbers=array(1,2,3,4,5,6,7,8,9,10);
// function cube($n){
//     return $n*$n*$n."<br>";
// }
// $newMap =array_map("cube",$numbers);//Callback function
// print_r($newMap);
// echo "</br>";
// print_r($numbers);


//34. array_filter()
// $numbers=array(1,2,3,4,5,6,7,8,9,10);
// function even($n){
//     return $n%2==0;
// }
// $newFilter=array_filter($numbers,"even");//Callback function
// print_r($newFilter);
// echo "</br>";
// print_r($numbers);

// $persons=array('sadman','sagor','sakib','rahim','karim','saleh');
// function filterByS($name){
//     return $name[0]==="s";
// }

// $newFilter=array_filter($persons,"filterByS");
// print_r($newFilter) ;



//35. array_reduce()
// $numbers=array(1,2,3,4,5,6,7,8,9,10);
//     function sum($oldValue=0,$newValue){
//         if($newValue%2==0){
//         return $oldValue+$newValue;
//         }
//         else{
//             return $oldValue;
//         }
// }

// $newSum=array_reduce($numbers,"sum");
// echo $newSum;
// sum(0,1);//0+1=1
// sum(1,2);//1+2=3
// sum(3,3);//3+3=6
// sum(6,4);//6+4=10


//36. count()
// $cars=array("Volvo","BMW","Toyota");
// echo count($cars);


//37. list()
// $cars=array("Volvo","BMW","Toyota");
// list($a,$b,$c)=$cars;
// echo $a;


//38. range()
// $numbers=range(0,10,2);
// print_r($numbers);


//39. shuffle()
//$numbers=range(0,10);
//shuffle($numbers);
//print_r($numbers);
//echo "</br>";
//$new=$numbers[0];
//echo $new;
