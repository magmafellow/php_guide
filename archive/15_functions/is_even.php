<?php

function is_even($number) {
  return !($number % 2) ? 'Yes<br />' : 'No<br />';
}
echo is_even(18);
echo is_even(22);
echo is_even(23);


