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
</body>
</html>