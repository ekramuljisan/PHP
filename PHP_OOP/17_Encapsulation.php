<?php
//Encapsulation er main kaj holo private property or method class er bahir theke keu access korte na pare
class MyInfo { 
    private $userId; 
    private $pwd; 
      
    // Update Facebook password 
    public function updatePwd($userId, $pwd) {   
        // Write function body 
        echo("Function to update password '". $pwd . "' for user " . $userId);       
    } 
  
    // Check account balance 
    public function courseName($userId) {   
        // Write function body 
        echo("Function to check course name of user ". $userId);              
    } 
} 
  
$obj = new MyInfo();
// $obj->pwd ="12345";
$obj -> updatePwd('GFG12', 'geeks54321'); 
$obj -> courseName('GFG06'); 