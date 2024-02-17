<?php

include('./PDO.PHP');

$query = "UPDATE customers
SET Name= 'AHMAD shhab', email='AAA@gmail.com', gender= 'mala'
WHERE cust_id ='33' ";
$stmt =$conn->prepare($query);

$stmt->execute();
echo $stmt->rowcount() . "records UPDATE SUCCESSFULLY";
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
  <h2>Add new studant</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
      <label for="cust_name">name:</label>
      <input type="name" class="form-control" id="cust_name" placeholder="Enter email" name="cust_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-check">
    <label >Gender:</label>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="Gender"  value="mala"checked>
      <label class="form-check-label" for="radio1">Mala</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="Gender" value="Famel">
      <label class="form-check-label" for="radio2">Famel</label>
    </div>
   
    <button type="submit" class="btn btn-default" name="Add">UP DATE studant</button>
  </form>
</div>

</body>
</html>

