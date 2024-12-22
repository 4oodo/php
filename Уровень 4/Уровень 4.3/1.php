<?php

function removeDuplicates($array) {
    return array_values(array_unique($array));
}

// Example usage
$inputArray = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates($inputArray);
print_r($result);
?>