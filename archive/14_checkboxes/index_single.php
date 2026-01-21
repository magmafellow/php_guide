<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio buttons</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="checkbox" name='pizza' value='Pizza' />Pizza <br>
    <input type="checkbox" name='hotdog' value='Hotdog' />Hotdog <br>
    <input type="checkbox" name='hamburger' value='Hamburger' />Hamburger <br>
    <input type="checkbox" name='taco' value='Taco' />Taco <br>

    <input type="text" style='display: none;' name="marker">
    <button type="submit">confirm</button>
  </form>

  <div>
    <?php

    if (isset($_POST['marker'])) {
      if (isset($_POST['pizza'])) {
        echo "You like Pizzas!" . '<br />';
      }
      if (isset($_POST['hotdog'])) {
        echo "You like Hotdogs!" . '<br />';
      }
      if (isset($_POST['hamburger'])) {
        echo "You like Hamburgers!" . '<br />';
      }
      if (isset($_POST['taco'])) {
        echo "You like Tacos!" . '<br />';
      }

      if (empty($_POST['pizza'])) {
        echo "You DON'T like Pizzas!" . '<br />';
      }
      if (empty($_POST['hotdog'])) {
        echo "You DON'T like Hotdogs!" . '<br />';
      }
      if (empty($_POST['hamburger'])) {
        echo "You DON'T like Hamburgers!" . '<br />';
      }
      if (empty($_POST['taco'])) {
        echo "You DON'T like Tacos!" . '<br />';
      }
    }

    ?>
  </div>
</body>

</html>