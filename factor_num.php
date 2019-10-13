<?php
function factors($num):array
{
  $factors = [];
  for ($i = 1; $i < $num; $i++) {
    if ($num % $i === 0) $factors[] = $i;
  }
  return $factors;
}