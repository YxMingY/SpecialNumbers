<?php
require "factor_num.php";
$friends = [];
for ($i = 1; $i < 300; $i++) {
  $sum = array_sum(factors($i));
  for ($ii = $i+1;$ii<300;$ii++){
    if($sum == $ii && $i == array_sum(factors($ii))) {
      array_push($friends,$i,$ii);
      break;
    }
  }
}
print_r($friends);
