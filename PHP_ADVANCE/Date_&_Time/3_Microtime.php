<?php
//unix epoch=1970-01-01 00:00:00
//unix timestamp=number of seconds that have passed since 1970-01-01 00:00:00

$timeStamp=time();//from 1970 to present
// echo $timeStamp;
// echo "\n";

//date from timestamp
$date = new DateTime('@' . $timeStamp);
echo $date->format('Y-m-d g:i:s a');
echo "\n";


$startTime = microtime(true);
//echo $startTime;//get microsecond
// for($i = 0; $i < 1000; $i++){
//     $y= $i*$i;
// }
// $endTime = microtime(true);
// $executionTime= ($startTime-$endTime)*1000;
// echo $executionTime;