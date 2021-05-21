<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative arrays</title>
</head>
<body>
  
<h2>Creating an associative array</h2>
  <article>
    <p>The key can either be an int or a string. The value can be of any type.</p>
    <p>Additionally the following key casts will occur:</p>
    <ul>
      <li>
        Strings containing valid decimal ints, unless the number is preceded by a + sign, will be cast to the int type. 
        E.g. the key "8" will actually be stored under 8. 
        On the other hand "08" will not be cast, as it isn't a valid decimal integer.
      </li>
      <li>
        Floats are also cast to ints, which means that the fractional part will be truncated. E.g. the key 8.7 will actually be stored under 8.
      </li>
      <li>
        Bools are cast to ints, too, i.e. the key true will actually be stored under 1 and the key false under 0.
      </li>
      <li>
        Null will be cast to the empty string, i.e. the key null will actually be stored under "".
      </li>
      <li>
        Arrays and objects can not be used as keys. Doing so will result in a warning: Illegal offset type.
      </li>
      <li>
        If multiple elements in the array declaration use the same key, only the last one will be used as all others are overwritten.
      </li>
    </ul>
  </article>

  <p>I think that the concept is really similar to JS objects... Key/value</p>
  <pre>
    <?php
      $associative_array = [
        'key' => 'value',
        'name' => 'Lucas',
        'age' => 18,
        'hobbies' => [
          1 => 'programming', 
          2 => 'run', 
          3 => 'polymer clay crafts'
        ],
        'potato' => 'and molasses'
      ];
      print_r($associative_array);
      
      echo '<br>Valor na chave "key" => '.$associative_array['key'].'<br><br>';
      
      $associative_array['new_key'] = 'new value';
      print_r($associative_array)
    ?>
  </pre>
  <h2>NULL COALESCING ASSIGNMENT OPERATOR ??=</h2>
  <pre>
    <?php
      //Short syntax
      $associative_array['this_key_does_not_exist_yet']??= 'assign me';
      $associative_array['this_key_already_exists'] = 'print me';
      $associative_array['this_key_already_exists'] ??= 'do not print me, cause I already exist';
      
      //Other syntax for this
      $associative_array['unknown_key'] = $associative_array['unknown_key'] ?? 'value';
      $associative_array['key'] = $associative_array['key'] ?? 'this will not be assigned';  
      print_r($associative_array);
    ?>
  </pre>
  
  <h2>Print keys</h2>
  <pre>
    <?php
      print_r(array_keys($associative_array));  
    ?>
  </pre>

  <h2>Print values</h2>
  <pre>
    <?php
      print_r(array_values($associative_array));  
    ?>
  </pre>

  <h2>Sorting by keys</h2>
  <pre>
    <?php
      print_r(ksort($associative_array));  
    ?>
  </pre>
  
  <h2>Sorting by values</h2>
  <pre>
    <?php
      print_r(asort($associative_array));  
    ?>
  </pre>
  
  <h2>Multidimensional arrays</h2>
  <pre>
    <?php
      $m_array = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
        [0, 0, 0]
      ];

      print_r($m_array);
    ?>
  </pre>
</body> 
</html>