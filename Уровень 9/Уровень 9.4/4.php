<?php
$array = [
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55],
];

$secondaryDiagonal = [];
$size = count($array);

for ($i = 0; $i < $size; $i++) {
    $secondaryDiagonal[] = $array[$i][$size - $i - 1];
}

print_r($secondaryDiagonal);
?>