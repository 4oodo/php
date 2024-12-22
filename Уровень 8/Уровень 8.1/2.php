<?php
function sortBySubarrayLength($array) {
    usort($array, function($a, $b) {
        return count($a) - count($b);
    });
    return $array;
}

$array = [
    [1, 2, 3],
    [1, 2],
    [1, 2, 3, 4, 5],
    [1],
    [1, 2, 3, 4],
];

$sortedArray = sortBySubarrayLength($array);
print_r($sortedArray);
?>