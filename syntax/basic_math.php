<?php 

$x = 10;
$y = 3;
$z = 9;

//+ - * / %
echo "<span>-----------------------</span><br>";
$sum = $x + $y;
$subtraction = $x - $y;
$multiplication = $x * $y;
$division = $x / $y;
$rest_of_division = $x % $y;
$power = pow($x, $y);

echo $sum.'<br>';
echo $subtraction.'<br>';
echo $multiplication.'<br>';
echo $division.'<br>';
echo $rest_of_division.'<br>';
echo $power.'<br>';

//+= -= *= /= %=
echo "<span>-----------------------</span><br>";
$sum += $z;
$subtraction -= $z;
$multiplication *= $z;
$division /= $z;
$rest_of_division %= $z;

echo $sum.'<br>';
echo $subtraction.'<br>';
echo $multiplication.'<br>';
echo $division.'<br>';
echo $rest_of_division.'<br>';

//++ --
echo "<span>-----------------------</span><br>";
echo $sum++.'<br>';//echo $sum++ => echo $sum; $sum+=1;
echo ++$sum.'<br>';//echo ++$sum => $sum+=1; echo $sum; 
echo $subtraction--.'<br>';
echo --$subtraction.'<br>';

//Conversion
echo "<span>-----------------------</span><br>";

$str_number = "15.02345";
var_dump($str_number);

echo '<br>';

$float_number = (float)$str_number;
var_dump($float_number);

echo '<br>';

$integer_number = (int)$str_number;
var_dump($integer_number);

echo '<br>';

$float_val = floatval($str_number);
var_dump($float_val);

echo '<br>';

$integer_val = intval($str_number);
var_dump($integer_val);

echo '<br>';
?>