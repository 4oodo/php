<?php
function swapColumns($array, $col1, $col2) {
    foreach ($array as &$row) {
        $temp = $row[$col1];
        $row[$col1] = $row[$col2];
        $row[$col2] = $temp;
    }
    return $array;
}

$array = [
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55],
];

$col1 = 1; // Index of the first column to swap
$col2 = 4; // Index of the second column to swap

$result = swapColumns($array, $col1, $col2);

print_r($result);
?>