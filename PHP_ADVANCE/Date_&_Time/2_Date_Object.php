<?php
//Another method to get timezone

$date1 = new DateTime('2025-4-25');
$date2 = new DateTime('2025-6-25');
$difference = $date1->diff($date2);
echo $difference->format('%r%a days ago') ."\n";


//add 10 days
// $date1 -> add(new DateInterval('P2Y10D'));
// echo $date1->format('Y-m-d g:i:s a');
// echo "\n";

