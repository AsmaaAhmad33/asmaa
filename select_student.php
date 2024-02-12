<?php

include('./SCHOOL.PHP');

$query = "SELECT * FROM student";

$stmt =$conn->prepare($query);

$stmt->execute();

$date = $stmt->fetchAll();

foreach($date as $row) {
echo $row[ 'Contact info'] . " " . $row['name'] . " " . $row['email']. " " . $row['password']. "" ."<br>";
}
?>