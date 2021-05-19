<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Useful Methods</title>
  <style>
    :root {
      color: white;
    }
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
    .string_function {
      background-color: crimson;
      color: antiquewhite;
    }
  </style>
</head>
<body>
    <?php
      $string = "     word WORD Word wORD   ";
      $str_number = "1289";
      $str_boolean = "true";
      $empty_string = "";
    ?>
    <h2>Is string - Return true/false if a variable is/isn't a string</h2>
    <?php
      echo '<div class="is_type">'."$string is string = ".is_string($string).'</div>';
      echo '<div class="is_type">'."$str_number is string = ".is_string($str_number).'</div>';
      echo '<div class="is_type">'."$str_boolean is string = ".is_string($str_boolean).'</div>';
      echo '<div class="is_type">'."$empty_string is string = ".is_string($empty_string).'</div>';
    ?>
    <h2>String functions</h2>
    <?php
      echo '<div class="string_function">'."strlen($string) = ".strlen($string).'</div>';
      echo '<div class="string_function">'."trim($string) = ".trim($string).'</div>';
      echo '<div class="string_function">'."ltrim($string) = ".ltrim($string).'</div>';
      echo '<div class="string_function">'."rtrim($string) = ".rtrim($string).'</div>';
      echo '<div class="string_function">'."str_word_count($string) = ".str_word_count($string).'</div>';
      echo '<div class="string_function">'."strrev($string) = ".strrev($string).'</div>';
      echo '<div class="string_function">'."strtolower($string) = ".strtolower($string).'</div>';
      echo '<div class="string_function">'."strtoupper($string) = ".strtoupper($string).'</div>';
      echo '<div class="string_function">'."lcfirst(WORD WORD WORD) = ".lcfirst('WORD WORD WORD').'</div>';
      echo '<div class="string_function">'."ucfirst(word word word) = ".ucfirst('word word word').'</div>';
      echo '<div class="string_function">'."strpos($string,'WORD') = ".strpos($string,'WORD').'</div>';
      echo '<div class="string_function">'."stripos($string,'WORD') = ".stripos($string,'WORD').'</div>';
      echo '<div class="string_function">'."substr($string, 10, 4) = ".substr($string, 10, 4).'</div>';
      echo '<div class="string_function">'."str_replace('word', 'BANANA', $string) = ".str_replace('word', 'BANANA', $string ).'</div>';
      echo '<div class="string_function">'."str_ireplace('word', 'BANANA', $string) = ".str_ireplace('word', 'BANANA', $string).'</div>';
  ?>
  <h2>Multiline text</h2>
  <?php
    echo nl2br("
    A
    B
    C
    D
    E
    F
    ");
  ?>
  <a href="https://www.php.net/manual/en/ref.strings.php" target="_blank">Strings</a>
  </body>
</html>