<?php
include('./SCHOOL.PHP');
if (isset($_POST['Add'])){
        $name = $_POST['STU_name'];
    $email = $_POST['email'];
    $pw = $_POST['pwd'];
    if (!empty($name) && !empty($email) && !empty($pw) ){
        $SQL = "INSERT INTO student(name,email,password) 
        VALUES('$name' , '$email' ,'$pw')";
        
        $conn->exec($SQL);
        
        echo"DATA Insert Successfully";
        
    }
}

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
  <h2>Add NEW Studant</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
      <label for="STU_name">name:</label>
      <input type="name" class="form-control" id="STU_name" placeholder="Enter email" name="STU_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="Add">Add NEW Studant</button>
  </form>
</div>

</body>
</html>

