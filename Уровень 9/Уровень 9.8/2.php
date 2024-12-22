<?php
$array = [
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55],
];

// Swap the first and last rows
$temp = $array[0];
$array[0] = $array[4];
$array[4] = $temp;

// Print the modified array
foreach ($array as $row) {
echo '[' . implode(', ', $row) . "]\n";
}
?>