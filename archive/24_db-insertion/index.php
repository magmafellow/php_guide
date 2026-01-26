<?php
include('database.php');

// 
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="index.php" method="post">
                <input hidden type="text" name="marker" value="marker_yes">
                <button type="submit">register Patrick</button>
        </form>

        <?php

        $next_user = 'Patrick';
        $next_password = 'rock3';
        $next_password_hash = password_hash($next_password, PASSWORD_DEFAULT);

        if (isset($_POST['marker'])) {
                // echo "Good form is submitted" . '<br />';
                $sql = "INSERT INTO users (user, password)
        VALUES ('{$next_user}', '{$next_password_hash}')";

                try {
                        mysqli_query($conn, $sql);
                        echo "Successfuly added Patrick to DB!" . '<br />';
                } catch (mysqli_sql_exception) {
                        echo "Could not add Patrick to DB" . '<br />';
                }

                mysqli_close($conn);
        }

        ?>

</body>

</html>