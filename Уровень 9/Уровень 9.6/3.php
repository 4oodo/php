<?php
$array = [
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55],
];

$size = count($array);

for ($i = 1; $i < $size; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $array[$i][$j] = 0;
    }
}

print_r($array);
?>