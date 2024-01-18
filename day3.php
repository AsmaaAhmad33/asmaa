<?php

$var ="hello EMAN!";
$res =strlen($var);
echo $res;
echo"<br>";
echo str_word_count($var);
echo "<br>";
echo strrev($var);
echo"<br>";
echo strpos($var,"EMAN");
echo"<br>";
$name = "Ali";
echo str_replace("EMAN", $name , $var);


/*this section
about <Numbers*/

$x = 5630.693;
var_dump(is_numeric($x));
echo "<br>";

$y = (int)$x;
echo $y . "<br>";

$str = "675550";
$res =(int)$str;
echo $res;

//constant
define('URL','WWW.FACEbook.com');

echo "<br>WELCOME to: ". URL . "<br>";
// Arithmatic Opreators
$num1 =15;
$num2 =3;

$sum = $num1 + $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;
echo "sum= $sum <br> ";
echo "Multiply= $num1<br> ";
echo "modulus= $div<br> ";




