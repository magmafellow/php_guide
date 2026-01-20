<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/website/index.php" method='post'>
        <label for="username">username:</label>
        <input type="text" name='username' id="username">
        <div style='margin-bottom: 10px;'></div>
        <label for="password">password:</label>
        <input type="password" name='password' id="password">
        <div style='margin-bottom: 10px;'></div>
        <input value="initiated" name="initiated" type="text" style="display: none;">

        <button type="submit">submit</button>

    </form>

    <?php

    if (empty($_POST['initiated'])) {
        echo 'No data<br/>';
    } else {
        foreach ($_POST as $key => $value) {
            echo "{$key} => {$value} <br />";
        }
    }

    echo "-------------<br/>";

    if (isset($_POST['initiated'])) {
        echo "<div style='color: blue; padding: 4px; border-radius: 8px;'>Ok, you have sent a request, we continue...</div>";

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            echo "<div style='color: red;'>Username is missing...</div>";
        } else if (empty($password)) {
            echo "<div style='color: red;'>Password is missing...</div>";
        } else {
            echo "<div style='color: green;'>Great you have been authenticated!</div>";
        }
    } else {
        echo "We are waiting for your request...<br />";
    }

    ?>

</body>

</html>