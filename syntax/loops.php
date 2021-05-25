<?php
echo "<h1>LOOPS</h1>";

echo "<h2>While</h2>";
$counter_while = 0;
while ($counter_while < 10){
  echo "$counter_while<br>";
  $counter_while++;
}

echo "<h2>Do While</h2>";
$counter_do_while = 0;
do {
  echo "$counter_do_while<br>";
  $counter_do_while ++;
} while ($counter_do_while < 10);

echo "<h2>For</h2>";
for ($counter_for = 0; $counter_for < 10; $counter_for++ ){
  echo "$counter_for<br>";
}

echo "<h2>For Each</h2>";
$str = 'p h p - i s - a w e s o m e';
$array = explode(' ', $str);

echo "<h3>First Example</h3>";
foreach( $array as $letter ){
  echo "$letter<br>";
}

echo "<h3>Second Example (With index)</h3>";
foreach( $array as $index => $letter ){
  echo "$index > $letter<br>";
}

$associative_array = [
  'a' => 'avocado',
  'b' => 'biscuit',
  'c' => 'cookie',
  'd' => ['D', 'r', 'a', 'g', 'o', 'n', 'f', 'r', 'u', 'i', 't', 'Durian']
];

echo "<h3>Third Example (Associative array)</h3>";
foreach($associative_array as $key => $value){
  if(is_array($value)){
    $value = implode(" ", $value);
  }
  echo "$value starts with the letter $key<br>";
}
?>