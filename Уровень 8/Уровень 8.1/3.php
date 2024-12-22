<?php
function sortBySubarraySum($array) {
    usort($array, function($a, $b) {
        return array_sum($a) - array_sum($b);
    });
    return $array;
}

$array = [
    [2, 4, 5],
    [1, 2, 3],
    [0, 1, 1],
    [5, 7, 1],
];

$sortedArray = sortBySubarraySum($array);
print_r($sortedArray);
?>