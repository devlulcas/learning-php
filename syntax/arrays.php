<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
  <style>
    pre {
      padding: 20px 10px 10px 10px;
    }
    .array {
      background-color: burlywood;
      color: black;
    }
    .array_old {
      background-color: coral;
      color: black;
    }
    .array_mixed {
      background-color: tomato;
      color: black;
    }
  </style>

</head>
<body>
  <?php
    $num = 0;
    $str = "aaa";
    //Creating arrays
    $array = [1, 2, 3, 4, 5];
    $array_old = array(1, 2, 3 , 4 , 5);
    $array_mixed = [1, "a", '22', $num, $str, $array];
  ?>

  <h2>See Arrays</h2>
  <pre class="array">
    <?php
      var_dump($array);
    ?>
  </pre>
  <pre class="array_old">
    <?php
      var_dump($array_old);
    ?>
  </pre>
  <pre class="array_mixed">
    <?php
      var_dump($array_mixed);
    ?>
  </pre>

  <h2>Element by index</h2>
  <?php
    echo "array[2] = $array[2]";
  ?>

  <h2>Set element by index</h2>
  <?php  
    $array[2] = 9;
    echo "array[2] = 9 => $array[2]";
  ?>
  
  <h2>Isset</h2>
  <?php
    echo "isset(array[3]) => ".isset($array[3]);
  ?>
  
  <h2>Append</h2>
  <?php
    $array[] = 6;
    echo "array[5] => $array[5]";
  ?>

  <h2>Append in the end of the array</h2>
  <?php
    array_push($array, 7);
    echo "array[5] => $array[6]";
  ?>

  <h2>Append in the beginning of the array</h2>
  <?php
    array_unshift($array, 0);
    echo "array[0] => $array[0]";
  ?>
  <h2>Delete an element in the last position</h2>
  <?php
    echo array_pop($array); 
  ?>
  <h2>Delete an element in the first position</h2>
  <?php
    echo array_shift($array);
  ?>

  <h2>Length</h2>
  <?php
    echo count($array);
  ?>

  <h2>Transforma string in array - Explode</h2>
  <pre>
    <?php
      $str_array = explode(".","b.a.n.a.n.a");
      var_dump($str_array);
    ?>
  </pre>
  <h2>Transforma array in string - Implode</h2>
  <pre>
    <?php
      $str_from_array = implode("-",["a","p","p","l","e"]);
      var_dump($str_from_array);
    ?>
  </pre>

  <h2>Check if an element exists in an array</h2>
  <pre>
    <?php
      echo var_dump( in_array(9, $array) );
    ?>
  </pre>

  <h2>Search element index</h2>
  <pre>
    <?php
      echo var_dump( array_search(9, $array));
    ?>
  </pre>

  <h2>Merge two arrays</h2>
  <pre>
    <?php
      echo "<br><br>Old way (array_merge): <br>"; 
      echo var_dump( array_merge($array, $array_old));
      echo "<br><br>New way (spread operator): <br>";
      echo var_dump([...$array, ...$array_old]);
    ?>
  </pre>

  <h2>Sort an array > A - Z / 0 - 9</h2>
  <pre>
    <?php
      sort($array);
      var_dump($array);
    ?>
  </pre>

  <h2>Sort an array > Z - A / 9 - 0</h2>
  <pre>
    <?php
      rsort($array);
      var_dump($array);
    ?>
  </pre>

  <a href="https://www.php.net/manual/en/language.types.array.php" target="_blank">More about arrays</a>
</body>
</html>