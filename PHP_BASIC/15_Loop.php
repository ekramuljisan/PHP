<?php

//for loop
// $num = 0;
// $sum = 0;

// for ($x=0; $x<=700; $x+=100){
//     if($x==500){
//         break;
//     }
//     echo "</br>".$num++." = ";
//     echo $x."</br>";
//     $sum += $x;
    
// }
// echo "<br>Total tk = " .$sum;



// //while loop(WordPress)
// $i=0;
// while($i<10){   
//     if($i==3){
//     break; 
//     }
//     echo $i."<br>";  
//     $i++;    
// }


//Alternative Syntax While Loop
// $i = 1;
// while ($i < 6) :
//     echo $i."<br>";
//     $i++;
// endwhile; 

  

//do while loop
// $i=0;
// do{ 
//     $i++;
//     echo $i. "<button>Submit</button><br>";
    
// }while($i<10);



//foreach (Laravel)
// $members = [
//     "Peter" => "35",
//     "Ben" => "37",
//     "Joe" => "43",
// ];

// foreach ($members as $key => $value) {
//     echo "$key : $value <br>";
// }


//Alternative Syntax Foreach Loop
$colors = array(
    "red",
    "green",
    "blue",
    "yellow"
);

foreach ($colors as $x) :
    if($x=="green"){
        continue;
    }
  echo "$x <br>";
endforeach;