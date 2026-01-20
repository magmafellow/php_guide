<?php

// associative array = An array made of key=>value pairs

// countries => capitals
// id => username
// item => price

$capitals = array('USA'=>'Washington D. C.', 'Japan'=>'Kyoto', 'South Korea'=>'Seoul', 'India'=>'New Delhi');

// echo $capitals['USA'];

// $capitals['USA'] = 'Las Vegas';
// $capitals['China'] = 'Beijing';

// array_pop($capitals);
// array_shift($capitals);

// $keys = array_keys($capitals);
// $values = array_values($capitals);

// foreach($values as $value) {
//     echo $value . '<br />';
// }

// $flipped = array_flip($capitals);

// foreach($flipped as $key => $value) {
//     echo "{$key} => {$value} <br />";
// }


$reversed = array_reverse($capitals);


foreach($capitals as $key => $value) {
    echo "{$key} => {$value} <br />";
}


?>