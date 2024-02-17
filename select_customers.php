<?php

include('./PDO.PHP');

$query = "SELECT * FROM customers";

$stmt =$conn->prepare($query);

$stmt->execute();

$data = $stmt->fetchAll();

// foreach($date as $row) {
// echo $row[ 'cust_id'] . " " . $row['Name'] . " " . "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>ADD NEW CUSTOMERS</h2>
  <p>This is customer table</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Name</th>
      <th>email</th>
      <th>password</th>
        <th>gender</th>
        <th>Updata</th>
        <th>Delet</th>

      </tr>
    </thead>
    <tbody>
      <?php
      foreach($data as  $row){
        echo"<tr>
        <td>{$row['Name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td>{$row['gender']}</td>
        <td><a href='./updata.php?ID={$row['cust_id']}'>
        {$row['cust_id']}</a>
</td>
<td><a href='./delet.php?ID={$row['cust_id']}'>
Delete</a>
</td>
</tr>";
      }
      ?>




      
  </table>
</div>

</body>
</html>
