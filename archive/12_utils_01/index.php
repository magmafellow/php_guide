<?php

// isset() = Returns TRUE if a variable is declared and not null
// empty() = Returns TRUE if a variable is not declared, false, null, ""


$username = true;


if (empty($username)) {
    echo "This variable is empty";
} else {
    echo "This variable is not empty";
}

echo '<br/>---------------<br/>';

if (isset($username)) {
    echo "This variable is set";
} else {
    echo "This variable is not set";
}

?>