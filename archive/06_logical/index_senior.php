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
$child        = false;
$senior       = true;
$ticket_price = null;

if ($child) {
    echo "You got discount (child)<br />";
    $ticket_price = 15;
}
if ($senior) {
    echo "You got discount (senior)<br />";
    $ticket_price = 17;
}
if (! $child && ! $senior) {
    echo "You did not get any discount<br />";
    $ticket_price = 39;
}

echo "Your ticket price is {$ticket_price}";

?>