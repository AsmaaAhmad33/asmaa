
<?php


$x = 10;
$y = 20;

$res = ++$x + $y;
echo $res . "<br>";
echo $x;

$current_date = date("d/m/Y h:i:sa");
echo $current_date;
 $test = mktime(10, 39 ,55 ,1 ,31 , 2022);

echo "<br> the created day is : " . date("Y/m/d h:i:sa",$test);
$name = "ALI";
if ($name=='admin' ) {
    echo "wel come admin ";
}elseif ($name== "Guest"){
    echo "wel come Guest ";
}else{
    echo "<br> WEL COME $name ";

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
  <h2>Alerts</h2>
  <?php
  if ($name=='admin' ){
    echo "<div class='alert alert-success'>
    <strong>Success!</strong> HELLO ADMIN
    </div>
    ";
  }elseif ($name== "Guest"){
    echo" <div class='alert alert-info'>
    <strong>Info!</strong> WEL COME GUEST.
  </div>
  ";
   } else{
    echo"   <div class='alert alert-warning'>
    <strong>Warning!</strong>     ' WEL COME $name ';

  </div>
";
  
 echo"
    <div class='alert alert-danger'>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
  ";