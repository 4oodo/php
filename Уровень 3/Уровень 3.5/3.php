<?php

$array = [10, 15, 23, 30, 42, 55, 60, 73, 85, 90];

$filteredArray = array_filter($array, function($number) {
    return strpos((string)$number, '0') !== false;
});

print_r($filteredArray);
?>
