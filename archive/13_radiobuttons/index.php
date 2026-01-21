<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio buttons</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>
      <input type="radio" name="credit_card" value="visa">
      Visa
    </label>
    <br>
    <label>
      <input type="radio" name="credit_card" value='mir'>
      MIR
    </label>
    <br>
    <label>
      <input type="radio" name="credit_card" value="master-card">
      MasterCard
    </label>
    <br>
    <input type="text" style='display: none;' name="marker">
    <button type="submit">confirm</button>
  </form>

  <div>
    <?php

    $form_marker = $_POST['marker'];

    if (isset($form_marker) && isset($_POST['credit_card'])) {

      $credit_card = $_POST['credit_card'];

      switch ($credit_card) {
        case 'visa':
          echo "You selected Visa";
          break;
        case 'mir':
          echo "You selected Mir system";
          break;
        case 'master-card':
          echo "You selected Master card";
          break;
        default:
          echo "You did not select option for credit card. Do it.";
      }
    } else {
      echo "You did not select option for credit card. Do it.";
    }

    ?>
  </div>
</body>

</html>