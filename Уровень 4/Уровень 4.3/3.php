<?php

function removeAdjacentDuplicates($array) {
    $result = [];
    $prev = null;
    foreach ($array as $value) {
        if ($value !== $prev) {
            $result[] = $value;
        }
        $prev = $value;
    }
    return $result;
}

// Example usage
$inputArray = [1, 2, 2, 3, 4, 4, 5, 5, 5, 6];
$result = removeAdjacentDuplicates($inputArray);
print_r($result);
?>