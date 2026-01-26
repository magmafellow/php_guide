<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration PHP Project</title>
</head>

<body>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
                <h2>Welcome to TrueBook!</h2>
                <div>
                        <label for="">username</label>
                        <input type="text" name="username">
                </div>
                <div>
                        <label for="">password</label>
                        <input type="password" name="password">
                </div>
                <div>
                        <input type="submit" name="submit" value="register">

                </div>
        </form>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
                echo "Please enter a username" . BR;
        } elseif (empty($password)) {
                echo "Please enter a password" . BR;
        } else {
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user, password) VALUES ('{$username}', '{$hash_password}')";
                try {
                        mysqli_query($conn, $sql);
                        echo "You are now registered!" . BR;
                } catch (mysqli_sql_exception) {
                        echo "We could not add user with credentials given. Try something else!" . BR;
                }
        }
}


mysqli_close($conn);
?>