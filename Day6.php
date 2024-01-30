<?php

function sum($num1,$num2)
{
    $result = $num1 + $num2;
    echo $result;
}
$x = 25;
$y = 10;



/*function number  ($num1){
      if ($num1==0){
    echo " <br>This number is zero ";
      } 
    elseif  ($num1 < 0){
        echo "<br>This number is negative.";
    }    
     elseif($num>0){
            echo " <br>This number is positive.";
          }
        }
        echo
*/$y1 = 0;

/*function test ($num){
if($num>0){
    echo "<br> This number is positive";
}
elseif ($num<0){
    echo "<br> This number is negative"; 
}
elseif ($num==0){
    echo "<br> This number is zero";
}
else{echo "undefind";}
}
$y=0;
//test ($y);//
/*$fruits= array("banana", "orange", "apples");
  $fruits [1] = "Test";
  echo  " I like " . $fruit[0].", " . $fruit[1]. " and" . $fruit[2]. "<br>";

  for ($i = 0; $i < count($fruits); $i++){
    echo $fruits[$i] . "<br>"; 
  */ 
  // Assiciative array//
   $grades = array(
    " arab" =>100, "math" =>90,"Eng"=>80, "HIS"=>50, "science"=>90);
    foreach ($grades as $k => $val){
        echo "your grade for $k is $val <br>";
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
        <th>Subject Name</th>
        <th>Grades</th>
          </tr>
    </thead>
    <tbody>
        <?php
            foreach ($grades as $k => $val){
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


  


