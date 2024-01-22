<?php
//Q1
$current_date = date("D");
$day = date("d/m/Y h:i:sa");
echo "Welcome! Have a nice  " .$current_date ."<br>";
echo "Welcome! Have a nice  " .$day ."<br>";
echo "<br>"."...................."."<br>" ;


//Q2
$x = 5;
echo "$x";      //5
echo "<br>";    
echo $x+++$x++;    // this line means that the valu of x added to the same valu after increment by 1 (5+6) so output will be (11) then the new valu of x that is 6 will increment again by another 1 #
echo "<br>";
echo $x;        //7 (6+1)   (6+1) the new valu of x after the last increment.
echo "<br>";
echo $x---$x--;  //1 (7-6) this line means that the latest valu of x added to the same valu after decrement by 1 (7-6) so output will be (1) then the new valu of x that is 6 will decrement again by another 1 #
echo "<br>";
echo $x; // 5 (6-1) the latest value of x #
echo "<br>"."......................"."<br>";

//Q3
$a = '1';
echo $a ."<br>";
$b = &$a;
// $b = &$a; This creates a reference $b to the same value as $a. This means that $b and $a now refer to the same variable in memory. Any changes made to $b will also affect $a.
echo $a ."<br>";
echo $b ."<br>";
$b = "2$b";
echo $a ."<br>";
echo $b ."<br>";
echo "<br>"."......................."."<br>" ;

//Q4
$num = 7;
 
if (is_numeric($num)) {
    if ($num > 0) {
        echo "This number is positive.";
    } elseif ($num < 0) {
        echo "This number is negative.";
    } else {
        echo "This number is zero.";
    }
} else {
    echo "Invalid input. Please enter a numeric value.";
}
echo "<br>";$num = "ASA";

if (is_numeric($num)) {
if ($num > 0) {
    echo "This number is positive.";
} elseif ($num < 0) {
    echo "This number is negative.";
} else {
    echo "This number is zero.";
}
} else {
echo "Invalid input. Please enter a numeric value.";
}
echo "<br>";

$num1 = -1;

if (is_numeric($num1)) {
if ($num1 > 0) {
    echo "This number is positive.";
} elseif ($num1 < 0) {
    echo "This number is negative.";
} else {
    echo "This number is zero.";
}
} else {
echo "Invalid input. Please enter a numeric value.";
}
echo "<br>";
?>