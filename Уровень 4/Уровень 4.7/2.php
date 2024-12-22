<?php

function getCommonElements($array1, $array2) {
    return array_values(array_intersect($array1, $array2));
}

// Example usage
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$result = getCommonElements($array1, $array2);
print_r($result);
?>