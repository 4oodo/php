<?php
function mergeSubarrayElements($array) {
    return array_map(function($subarray) {
        return (int)implode('', $subarray);
    }, $array);
}

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$mergedArray = mergeSubarrayElements($array);
print_r($mergedArray);
?>