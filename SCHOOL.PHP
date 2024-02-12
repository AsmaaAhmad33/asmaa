<?php

$servre_name = "localhost";
$username = "root";
$pw = '';
$name = "school";

try {
     $conn = new PDO (
       "mysql:host=$servre_name;dbname=$name",  
       $username,
       $pw

     );
     //set the PDO error mode to exception
     $conn->setAttribute(
     PDO::ATTR_ERRMODE,
     PDO::ERRMODE_EXCEPTION);
          echo "Connected  successfully<br> ";  
          }catch  (PDOException $e){
    echo "connection failed: " .$e-> getMessage();
    echo  "<br>";
}