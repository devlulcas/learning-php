<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX 001</title>
</head>
<body>
  <form action="ex001.php" method="post">
    <label for="n">How many articles do you want to see? </label>
    <input type="range" min="0" max="10" name="n" list="tickmarks" id="n">
    <datalist id="tickmarks">
      <option value="0">
      <option value="1">
      <option value="2">
      <option value="3">
      <option value="4">
      <option value="5">
      <option value="6">
      <option value="7">
      <option value="8">
      <option value="9">
      <option value="10">
    </datalist>
    <button type="submit">Send</button>
  </form>
  <?php
    $content = [
      "1Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi.",
      "2Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi.",
      "3Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi.",
      "4Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi.",
      "5Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi.",
      "6Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi.",
      "7Lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, excepturi."
    ];

    $n = intval($_POST['n']) ?? 0;
    if ($n === 0) {
      echo "<p>Nothing here</p>";
    }
    elseif ($n <= count($content)){
      $content_titles = array_keys($content);
      for ($index=0; $index <= $n-1; $index++) { 
        $content_title = $content_titles[$index];
        $content_text = $content[$content_title];
        echo "
        <article>
        <h2>$content_title</h2>
        <p>$content_text</p>
        </article>
        ";
      }
    }
    else {
      echo "<p>Too much :(</p>";
    }
  ?>
</body>
</html>