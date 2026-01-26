<?php

// cookie = Information about a user stored in a user's web-browser
//          targeted advertisements, browsing preferences, and
//          other non-sensetive data


setcookie("fav_food", "pizza", time() + (86400 * 2), '/');
setcookie("fav_drink", "juice_apple", time() + (86400 * 2), '/');
setcookie("fav_dessert", "ice_cream", time() + (86400 * 2), '/');


// foreach ($_COOKIE as $key => $value) {
//   echo "{$key} = {$value}<br />";
// }


if(isset($_COOKIE['fav_food'])) {
  echo "BUY SOME {$_COOKIE['fav_food']}";
} else {
  echo "I dont know your favorite food";
}
