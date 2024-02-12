<?php
include('./SCHOOL.PHP');

$SQL = "INSERT INTO  student (name,email,password) 
VALUES('shaymaaahmad','shoshoahmad33@gmail.com','123456')";

$conn->exec($SQL);

echo"DATA Insert Successfully";
?>