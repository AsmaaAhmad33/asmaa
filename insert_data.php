<?php
include('./PDO.PHP');

$SQL = "INSERT INTO customers(Name,email,password,gender) 
VALUES('ASMAA AHMAD' , 'asmaaahmad33@gmail.com' ,'123456','famal')";

$conn ->exec($SQL);

echo"DATA Insert Successfully";
?>