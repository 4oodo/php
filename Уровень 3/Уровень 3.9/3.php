<?php

function hasTwoOrMoreZeros($number) {
    return substr_count((string)$number, '0') < 2;
}

$array = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
$result = array_filter($array, 'hasTwoOrMoreZeros');

print_r($result);
?>
