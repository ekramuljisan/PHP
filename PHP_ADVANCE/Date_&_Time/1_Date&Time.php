<?php
//Get a Date
// echo "Today is " . date("Y/m/d") . "\n";
// echo "Today is " . date("Y.m.d") . "\n";
// echo "Today is " . date("Y-m-d") . "\n";
// echo "Today is " . date("dS F, Y") . "\n";
// echo "Today is " . date("l");


//Get a Time
// date_default_timezone_set("Asia/Dhaka");
// echo "The time is ". date("h:i:s A") . "\n";


//Create a Date With mktime()
// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is ".date("Y-m-d h:i:sa", $d);


//Create a Date From a String With strtotime()
$date=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:s A", $date). "\n";


//Find a Week of the year.
// $date = strtotime('today');
// $week=date('W',$date);
// echo $week;


//Find day and time for tommorrow.
// $tommorw=strtotime('Tommorow');
// echo date("Y-m-d h:i:sa",$tommorw) . "\n";


//Find day and time for next 3 months.
// $date=strtotime("+3 Months");
// echo date("Y-m-d h:i:sa", $date) . "\n";


// $startdate = strtotime("Saturday");
// $enddate = strtotime("+6 weeks", $startdate);

// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);
// }


// $d1=strtotime("July 04");
// $d2=ceil(($d1-time())/60/60/24);
// echo "There are " . $d2 ." days until 4th of July.";


