<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>
      username
      <input type="text" name="username">
    </label><br />
    <label>
      age
      <input type="text" name="age">
    </label><br />
    <label>
      email
      <input type="text" name="email">
    </label><br />
    <input type="submit" name="login">
  </form>
</body>

</html>


<?php

if (isset($_POST['login'])) {

  // $username = $_POST['username'];
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if (empty($age)) {
    echo 'Age was not valid <br />';
  } else {
    echo "You are {$age} years old!<br />";
  }

  if (empty($email)) {
    echo 'Email was not valid <br />';
  } else {
    echo "Email provided: $email <br />";
  }
}
