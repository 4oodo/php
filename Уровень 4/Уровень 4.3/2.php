<?php

function removeDuplicatesMoreThanThreeTimes($array) {
    $counts = array_count_values($array);
    return array_filter($array, function($value) use ($counts) {
        return $counts[$value] <= 3;
    });
}

// Example usage
$inputArray = [1, 2, 2, 2, 2, 3, 4, 4, 4, 4, 5];
$result = removeDuplicatesMoreThanThreeTimes($inputArray);
print_r($result);
?>