<?php

$array = [
    [2, 1, 4, 3, 5],
    [3, 5, 2, 4, 1],
    [4, 3, 1, 5, 2],
];

$sortedArray = array_map(function($subArray) {
    sort($subArray);
    return $subArray;
}, $array);

print_r($sortedArray);
?>
