<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio buttons</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="checkbox" name='foods[]' value='Pizza' />Pizza <br>
    <input type="checkbox" name='foods[]' value='Hotdog' />Hotdog <br>
    <input type="checkbox" name='foods[]' value='Hamburger' />Hamburger <br>
    <input type="checkbox" name='foods[]' value='Taco' />Taco <br>

    <input type="text" style='display: none;' name="marker">
    <button type="submit">confirm</button>
  </form>

  <div>
    <?php

    if (isset($_POST['marker'])) {


      if (isset($_POST['foods'])) {
        $foods = $_POST['foods'];
        
        foreach ($foods as $food) {
          echo "{$food} <br />";
        }
      }
    }

    ?>
  </div>
</body>

</html>