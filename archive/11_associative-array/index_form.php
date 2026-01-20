<?php
    $capitals = ['USA' => 'Washington D. C.', 'Japan' => 'Kyoto', 'South Korea' => 'Seoul', 'India' => 'New Delhi'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <div>
            <label for="">Country name:</label>
            <input type="text" name="country">
            <button type="submit">submit</button>
        </div>
    </form>
</body>
</html>


<?php

$country = $_GET['country'];
if (isset($country)) {
    $capital = $capitals[$country];

    if (isset($capital)) {
        echo "Capital of {$country} is {$capital}";
    } else {
        echo "We could not find capital for {$country}";
    }
}