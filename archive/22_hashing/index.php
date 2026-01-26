<?php

const BR = '<br />';

// hashing = transforming sensetive data (password)
//           into letters, numbers, and/or symbols
//           via a mathematical process. (similar to encryption)
//           Hides the original data from 3rd parties.



$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);


echo $hash . BR;


if (password_verify('pizza123', $hash)) {
  echo 'It matches!' . BR;
} else {
  echo 'It DOES NOT match! :|' . BR;
}
