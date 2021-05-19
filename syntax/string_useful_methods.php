<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      $string = "aMAN, wassuuuup";
      $str_number = "1289";
      $str_boolean = "true";
      $empty_string = "";
    ?>
    <h2>Is string - Return true/false if a variable is/isn't a string</h2>
    <?php
      echo '<div class="is_type">'.$string." is string = ".is_string($string).'</div>';
      echo '<div class="is_type">'.$str_number." is string = ".is_string($str_number).'</div>';
      echo '<div class="is_type">'.$str_boolean." is string = ".is_string($str_boolean).'</div>';
      echo '<div class="is_type">'.$empty_string." is string = ".is_string($empty_string).'</div>';
    ?>
  </body>
</html>