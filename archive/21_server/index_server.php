<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label>
      username:
      <input type="text" name="username"><br />
    </label>
    <input type="submit" name="login" value="login_val">
  </form>

  <?php echo $_POST['username'] . '<br />'; ?>

  <?PHP 
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'POST is enabled'.'<br />';
  }
  
  ?>
</body>

</html>