<?php

$array = [123, 456, 789];
$result = [];

foreach ($array as $number) {
    $digits = str_split($number);
    $result = array_merge($result, $digits);
}

print_r($result);
?>
