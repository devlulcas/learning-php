<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NUMBER USEFUL METHODS</title>
  <style>
    span {
      color: blueviolet;
    }
    body, div {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    body {
      min-height: 100vh;
      max-width: 100vw;
      background-color: #0c0c0c;
    }
    h2 {
      color: whitesmoke;
    }
    div {
      padding : 10px;
      margin-top: 10px;
      border-radius: 20px;
    }
    .is_type {
      background-color: aquamarine;
      color: darkblue;
    }
    .math_function {
      background-color: chocolate;
      color: beige;
    }
    .format {
      background-color: teal;
      color: beige;
    }

    a{
      color: aliceblue;
    }
    a:visited{
      color: aquamarine;
    }
  </style>
</head>
<body>
  <?php
    $int = 2;
    $bool = true;
    $null = null;
    $float = 0.3;
  ?>
  <h2>Is Type - Return true/false if a variable is/isn't of determined type</h2>
  <?php
    echo '<div class="is_type">'.$int." is int = ".is_integer($int).'</div>';
    echo '<div class="is_type">'.$bool." is bool = ".is_bool($bool).'</div>';
    echo '<div class="is_type">'.$null." is null = ".is_null($null).'</div>';
    echo '<div class="is_type">'.$float." is float/double = ".is_float($float).'</div>';
    echo '<div class="is_type"> "25"'." is numeric = ".is_numeric("25").'</div>';
    echo '<div class="is_type"> "8R4Z1L"'." is numeric = ".is_numeric("8R4Z1L").'</div>';
  ?>
  <h2>Math functions</h2>
  <?php
    $absolute = abs(-15); // | -15 | -> |15| 
    $power = pow(2, 8);
    $square_root = sqrt(9);
    $max = max(1,10);
    $min = min(1,10);
    $round = round(1.6);
    $round = round(1.4);
    $round_down = floor(1.7);
    $round_up = ceil(1.3); 
    
    echo '<div class="math_function"> abs(-15) = '.$absolute.'</div>';
    echo '<div class="math_function"> pow(2,8) = '.$power.'</div>';
    echo '<div class="math_function"> sqrt(9) = '.$square_root.'</div>';
    echo '<div class="math_function"> max(1, 10) = '.$max.'</div>';
    echo '<div class="math_function"> min(1, 10) = '.$min.'</div>';
    echo '<div class="math_function"> round(1.6) = '.$round.'</div>';
    echo '<div class="math_function"> round(1.4) = '.$round.'</div>';
    echo '<div class="math_function"> floor(1.7) = '.$round_down.'</div>';
    echo '<div class="math_function"> ceil(1.3) = '.$round_up.'</div>';
  ?>

  <h2>Formatting numbers </h2>
  <?php
    $number = 29131232.1211221;
    echo '<div class="format">'."number_format($number, 3 , '-', '>') --- ". number_format($number, 3 , '-', '>') .'</div>';
    echo '<div class="format">'."number_format($number, 2 , ',', '.') --- ". number_format($number, 2 , ',', '.') .'</div>';
    echo '<div class="format">'."number_format($number, 5 , ' and ', '.') --- ". number_format($number, 5 , ' and ', '.') .'</div>';
  ?>

  <a href="https://www.php.net/manual/pt_BR/book.math.php" target="_blank">Book math</a>
  <a href="https://www.php.net/manual/pt_BR/ref.math.php" target="_blank">Ref math</a>
</body>
</html>