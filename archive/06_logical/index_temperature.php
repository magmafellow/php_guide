<?php

/* Logical operators */
// &&, ||, !

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Logical operators</title>
</head>

<body>

</body>

</html>
<?php

$temperature = 27;
$claudy      = false;

if ($temperature >= 0 && $temperature < 30) {
    echo "The weather is nice!<br />";
} else {
    echo "The weather is bad :(<br/>";
}

if (! $claudy) {
    echo "This is sunny day ☀️";
} else {
    echo "This is claudy out there 🌧️";
}

?>