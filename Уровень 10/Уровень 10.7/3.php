<?php
function sumColumns($array) {
    $columnSums = array_fill(0, count($array[0]), 0);

    foreach ($array as $row) {
        foreach ($row as $colIndex => $value) {
            $columnSums[$colIndex] += $value;
        }
    }

    return $columnSums;
}

$array = [
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
];

$result = sumColumns($array);
print_r($result);
?>