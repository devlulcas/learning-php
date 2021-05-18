<?php 
  define("PI", 3.14);
  echo '<br>'.PI.'<br>'; //Without $
  
  echo '<br>SOME PHP BUILT IN CONSTANTS<br>';
  echo PHP_INT_MAX;
  echo '<br>';
  echo PHP_INT_MIN;

  //Trying to change a value in a constant
  define("ARR", [12,12,12]);
  echo '<br>Arr before = '.ARR[0];
  //ARR[0] = 13; //Fatal error: Cannot use temporary expression in write context in \Learning-php-basics\syntax\constants.php on line 13
  //echo '<br>Arr after = '.ARR[0];
?>