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
    <label for="radius">radius:</label><br />
    <input type="text" name="radius" id="radius" /><br />

    <input type="submit" value="Calculate" />
  </form>
</body>

</html>
<?php

$radius        = $_POST['radius'];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 4);
$area = pi() * pow($radius, 2);
$area = round($area, 4);

$volume = 4 / 3 * pi() * pow($radius, 3);
$volude = round($volume, 4);

echo "Circumference = {$circumference}cm<br/>";
echo "Area = {$area}cm^2<br/>";
echo "Volume = {$area}cm^3";

?>