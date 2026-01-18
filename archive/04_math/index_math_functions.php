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
    <label for="x">x:</label><br />
    <input type="text" name="x" id="x" /><br />
    <label for="y">y:</label><br />
    <input type="text" name="y" id="y" /><br />
    <label for="z">z:</label><br />
    <input type="text" name="z" id="z" /><br />
    <input type="submit" value="Log in" />
  </form>
</body>

</html>
<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];

    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    $total = rand(0, 1000);

echo $total;
?>