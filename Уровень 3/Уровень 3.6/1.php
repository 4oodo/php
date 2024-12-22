<?php

$array = [10, 150, 23, 3000, 42, 555, 600, 73, 85, 9000];

$filteredArray = array_filter($array, function($number) {
    return strlen((string)$number) <= 3;
});

print_r($filteredArray);
?>