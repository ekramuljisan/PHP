<?php
//Characteristics of Destructor Function
//1. It can't take parameter
//2. It executed automatically
//3. It can't use return
//4. It get the property

 class Car{
    public $name;
     public $color;

     public function __construct($name,$color){
         $this->name=$name;
         $this->color=$color;
     }

     public function __destruct(){
       echo "The name of the car is {$this->name} and color is {$this->color}" ;
     }
 }
 $car=new Car("Premio","Red");

// class Database
// {
//     public $hostname;
//     public $username;
//     public $password;
//     public $dbname;

//     public function __construct($name,$user,$pass,$db){
//         $this-> hostname = $name;
//         $this-> username = $user;
//         $this-> password = $pass;
//         $this-> dbname = $db;
//     }

//     public function __destruct(){
//         echo mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
//     }

// }

// $db_conn = new Database("localhost", "root", "", "bestbatch");


// if ($db_conn == true) {
//      echo "Connection Done";
// } 
// else {
//     echo "Connection Failed";
// }
