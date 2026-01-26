<?php

$username = 'Magma The Fellow';
$username_array = array('Magma', 'The', 'Fellow');
$phone = '123-456-7890';

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 17, '@');
// $phone = str_replace('-', '@', $phone);
// $username = strrev($username);
// $username = str_shuffle($username);
// $username = strcmp($username, 'Magma Fellow');
// $count = strlen($username);
// $index = strpos($phone, '-');
// $first_name = substr($username, 0, 5);
// $last_name = substr($username, 6);

// $full_name_array = explode(' ', $username);
// foreach ($full_name_array as $name) {
//   echo $name . '<br />';
// }

$full_name = implode('@', $username_array);
echo $full_name;





// echo $first_name;
