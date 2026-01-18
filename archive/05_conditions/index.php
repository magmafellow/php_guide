<?php

    /* CONDITIONS */

    //  if statement

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=f, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>
<?php

    $age = 999;

    if ($age >= 100) {
    echo "You are too old to enter this site";
    } elseif ($age >= 18) {
    echo "You may enter this site";
    } elseif ($age <= 0) {
    echo "That wasnt a valid age";
    } else {
    echo "You must be 18+ to enter";
    }

?>