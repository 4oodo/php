<?php

function getNextElement($array, $element) {
    $index = array_search($element, $array);
    if ($index === false) {
        return null;
    }
    $nextIndex = ($index + 1) % count($array);
    return $array[$nextIndex];
}

// Example usage
$arr = [1, 2, 3, 4, 5];
echo getNextElement($arr, 1);
echo getNextElement($arr, 4);
echo getNextElement($arr, 5);
?>