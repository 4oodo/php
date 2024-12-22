<?php

function rangeArray($num1, $num2) {
    $min = min($num1, $num2);
    $max = max($num1, $num2);
    return range($min, $max);
}

// Example usage
$start = 3;
$end = 7;
$result = rangeArray($start, $end);
print_r($result);
?>