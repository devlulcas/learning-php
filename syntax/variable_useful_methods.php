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

    .gettype {
      background-color: tomato;
      color: bisque;
    }
    .isset {
      background-color: brown;
      color: wheat;
    }
  </style>
</head>
<body>
  
  <?php
    $string = "a";
    $int = 2;
    $bool = true;
    $null = null;
    $float = 0.3;
  ?>

  <h2>Get Type - Return the type of the variable</h2>
  <?php
    echo '<div class="gettype">'.gettype($string).'</div>';
    echo '<div class="gettype">'.gettype($int).'</div>';
    echo '<div class="gettype">'.gettype($bool).'</div>';
    echo '<div class="gettype">'.gettype($null).'</div>';
    echo '<div class="gettype">'.gettype($float).'</div>';
  ?>

  <h2>Is Set - Return true/false if a variable is/isn't setted</h2>
  <?php
    echo '<div class="isset">'.$string." is setted = ".isset($string).'</div>';
    echo '<div class="isset">'.$int." is setted = ".isset($int).'</div>';
    echo '<div class="isset">'.$bool." is setted = ".isset($bool).'</div>';
    echo '<div class="isset">'.$null." is setted = ".isset($null).'</div>'; //Interesting that null counts like not setted
    echo '<div class="isset">'."novariable"." is setted = ".isset($pipipi).'</div>';
    echo '<div class="isset">'."anothernovariable"." is setted = ".isset($popopo).'</div>';
    echo '<div class="isset">'.$float." is setted = ".isset($float).'</div>';
  ?>
</body>
</html>