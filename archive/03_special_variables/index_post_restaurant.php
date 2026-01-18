<?php

    // Special Variables: $_GET, $_POST.
    // Purpose: Collect Data from an HTML form

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=f, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="POST">
    <label for="quantity">quantity:</label><br />
    <input type="text" name="quantity" id="quantity" /><br />
    <input type="submit" value="Log in" />
  </form>

  <div>

  <?php
      $item  = 'Buuza';
      $price = 1790;

      $qnt = $_POST["quantity"];
      $total_price = $qnt * $price;
      echo "You have ordered {$qnt} x {$item}'s <br/>";
      echo "Total is {$total_price} rubbles."
  ?>

  </div>

</body>

</html>
