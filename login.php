<?php
session_start();
$msg = "";
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $pw = $_POST [ 'pwd'];
    if (!empty($email)&& !empty($pw)){
        //$_SESSION ['user_email'] = $email ;
      //  $_SESSION ['pw'] = $pw ;
       // $msg = "Welcome " .  $_SESSION ['user_email'] = $email ;
       $expire = time() + (86400*30);
       setcookie('asmaa', $email,$expire,"/");
       $msg = "Welcome" . $_COOKIE['asmaa'];

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
    <?php echo $msg;?> .<a href= "./logout.php">Logout</a> 
  <h2>sing up form</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
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
    <button type="submit" class="btn btn-default" name="login">login</button>
  </form>
</div>

</body>
</html>
