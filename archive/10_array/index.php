<?php

// array = "variable" which can hold more than one value at a time

// $food_1 = 'apple';
// $food_2 = 'orange';
// $food_3 = 'banana';
// $food_4 = 'coconut';
// this is INCONVINIENT!

$foods = array('apple', 'orange', 'banana', 'coconut');

// echo $foods[0] . '<br />';
// echo $foods[1] . '<br />';
// echo $foods[2] . '<br />';
// echo $foods[3] . '<br />';
// echo $foods[4] . '<br />';

// $foods[0] = 'pineapple'; 
// array_push($foods, 'pear', 'kiwi');
// array_pop($foods);
// array_shift($foods);
// $reversed_foods = array_reverse($foods);

echo count($foods) . '<br />';

foreach($foods as $food) {
    echo $food . ' <br />';
}
