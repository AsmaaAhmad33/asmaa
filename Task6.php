<?php
//Q1
function rectangle_area($length, $width) {
    $area = $length * $width;
    return $area;
  }

$length = 5;
$width = 3;
$area = rectangle_area($length,$width);
echo "The area of the rectangle is: " . $area; "<br>";
echo "<br>";


//Q2
 $foods =  array(
    "JOY"=> "Smarties", "Ahmad"=>"Pringles", "Cassie"=>"Marmite crisps", "Ben"=> "Mr Kiplings cakes");
    foreach ($foods as $k=>$val){
        echo"$k FavouriteFood  is $val <br> ";
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
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>FavouriteFood</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
            foreach ($foods as $k=>$val){
        echo "<tr>
        <td>$k</td>
        <td>$val
         </tr>";
         }
         ?>
        </tbody>
  </table>
</div>
</body>
</html>
