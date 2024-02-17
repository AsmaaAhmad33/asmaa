<?php

include('./PDO.PHP');

$query = "UPDATE customers
SET Name= 'AHMAD shhab', email='AAA@gmail.com', gender= 'mala'
WHERE cust_id ='4' ";
$stmt =$conn->prepare($query);

$stmt->execute();
echo $stmt->rowcount() . "records UPDATE SUCCESSFULLY";
?>
