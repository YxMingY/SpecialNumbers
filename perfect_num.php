<?php
require "factor_num.php";
$perfects = [];
for ($i = 1; $i < 10000; $i++) {
  if (array_sum(factors($i)) == $i)
    $perfects[] = $i;
}
print_r($perfects);