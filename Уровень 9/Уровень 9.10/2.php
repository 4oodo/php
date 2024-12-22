<?php
$array = [
    [11, 32, 13, 44, 55],
    [31, 42, 53, 66, 75],
    [12, 26, 33, 45, 52],
    [15, 22, 35, 64, 57],
    [21, 52, 32, 44, 38],
];

$minValue = PHP_INT_MAX;
$maxValue = PHP_INT_MIN;
$minPos = $maxPos = ['row' => -1, 'col' => -1];

foreach ($array as $rowIndex => $row) {
    foreach ($row as $colIndex => $value) {
        if ($value < $minValue) {
            $minValue = $value;
            $minPos = ['row' => $rowIndex, 'col' => $colIndex];
        }
        if ($value > $maxValue) {
            $maxValue = $value;
            $maxPos = ['row' => $rowIndex, 'col' => $colIndex];
        }
    }
}

$temp = $array[$minPos['row']][$minPos['col']];
$array[$minPos['row']][$minPos['col']] = $array[$maxPos['row']][$maxPos['col']];
$array[$maxPos['row']][$maxPos['col']] = $temp;

print_r($array);
?>