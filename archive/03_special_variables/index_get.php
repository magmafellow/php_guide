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
  <form action="index.php" method="GET">
    <label for="user_field">username:</label><br />
    <input type="text" name="username" id="user_field" /><br />
    <label for="password_field">password:</label><br />
    <input type="password" name="password" id="password_field" /><br />
    <input type="submit" value="Log in" />
  </form>

</body>

</html>

<?php
    echo "{$_GET["username"]}<br />";
    echo "{$_GET["password"]}<br />";
?>