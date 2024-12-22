<?php

function getMaxInEachSubarray($array) {
    $maxValues = [];

    foreach ($array as $subarray) {
        if (!empty($subarray)) {
            $maxValues[] = max($subarray);
        }
    }

    return $maxValues;
}

$inputArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r(getMaxInEachSubarray($inputArray));
?>