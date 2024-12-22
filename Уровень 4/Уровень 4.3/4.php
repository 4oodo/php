<?php

function getMaxMin($array) {
    return [
        'max' => max($array),
        'min' => min($array),
    ];
}

// Example usage
$inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = getMaxMin($inputArray);
print_r($result);
?>