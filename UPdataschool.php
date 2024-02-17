<?php

include('./SCHOOL.PHP');

$query = "UPDATE student
SET Name= 'AHMAD shhab', email='AAA@gmail.com', password= '01202424'
WHERE Concat info ='19' ";
$stmt =$conn->prepare($query);

//$stmt->execute();
//echo $stmt->rowcount() . "records UPDATE SUCCESSFULLY";
?>

