<?php
$name=array(
    "first_name"=>"Ekramul",
    "last_name"=>"Islam",
    "age"=>26,
    "city"=>"Dhaka",
    "country"=>"Bangladesh"
);
print_r($name);
unset($name["country"]);
echo "</br>";
print_r($name);