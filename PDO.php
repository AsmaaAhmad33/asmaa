<?php

$host = "localhost";
$username = "root";
$pw = '';
$db = "my_website";

try {
     $conn = new PDO (
       "mysql:host=$host;dbname=$db",  
       $username,
       $pw

     );
     //set the PDO error mode to exception
     $conn->setAttribute(
     PDO::ATTR_ERRMODE,
     PDO::ERRMODE_EXCEPTION);
          echo "Connected  successfully <br>";  
          }catch  (PDOException $e){
    echo "connection failed: " .$e-> getMessage();
}