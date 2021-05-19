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
</body>
</html>