<?php
session_start()
// SGB = super global variable

// session = SGB used to store information on a user
//           to be used across multiple pages.
//           A user is assigned a session-id
//           ex. login credentials

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is the index page
</body>
</html>

<?php

$_SESSION['username'] = 'magmafellow';
$_SESSION['passowrd'] = 'btf123';
$_SESSION['music'] = 'fine';
$_SESSION['age'] = '20';


?>