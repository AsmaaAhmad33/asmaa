<?php

include('./PDO.PHP');

$id = $_GET['ID'];

$sql = "DELETE FROM customers where cust_id='$id' ";

$conn->exec($sql);        
                
 echo"Cutmer Delet Successfully";
