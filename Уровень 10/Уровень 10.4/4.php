<?php
function zeroColumn(&$array, $columnIndex) {
    foreach ($array as &$row) {
        if (isset($row[$columnIndex])) {
            $row[$columnIndex] = 0;
        }
    }
}

// Пример использования
$array = [
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55],
];

$columnIndex = 2;
zeroColumn($array, $columnIndex);

foreach ($array as $row) {
    echo implode(', ', $row) . "\n";
}
?>