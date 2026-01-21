<?php

function hypotenuse(float $a, float $b) {
  $c = sqrt($a**2 + $b**2);

  return round($c, 4);
}

echo hypotenuse(3, 4);
