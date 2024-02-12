<?php

include('./PDO.PHP');

$query = "SELECT * FROM customers";

$stmt =$conn->prepare($query);

$stmt->execute();

$date = $stmt->fetchAll();

foreach($date as $row) {
echo $row[ 'cust_id'] . " " . $row['Name'] . " " . "<br>";
}
?>