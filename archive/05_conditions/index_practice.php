<?php

    /* CONDITIONS */

    //  if statement

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Conditions</title>
</head>

<body>

</body>

</html>
<?php
    $hours      = 50;
    $rate       = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
    $weekly_pay = 0;
    } elseif ($hours <= 40) {
    $weekly_pay = $hours * $rate;
    } else {
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";

?>