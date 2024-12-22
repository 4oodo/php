<?php
function getMaxDepth(array $array, $depth = 0) {
    $maxDepth = $depth;
    foreach ($array as $value) {
        if (is_array($value)) {
            $maxDepth = max($maxDepth, getMaxDepth($value, $depth + 1));
        }
    }
    return $maxDepth;
}

// Example usage
$array = [
    [1, 2, [3, 4, [5, 6]]],
    [7, 8],
    [9, [10, [11, [12]]]]
];

echo getMaxDepth($array); // Output: 4
?>