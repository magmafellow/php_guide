<?php
include('database.php');

const BR = '<br />';

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
        <?php

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                echo "Total rows: " . mysqli_num_rows($result) . BR . BR;

                while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['user'];
                        $reg_date = $row['reg_date'];

                        echo "{$name} with id of {$id} registered at {$reg_date}" . BR;
                }
        }


        mysqli_close($conn);
        ?>

</body>

</html>