<?php
function addRowAndColumn($array) {
    $rows = count($array);
    $cols = count($array[0]);

    $newRow = [];
    for ($i = 0; $i < $cols; $i++) {
        $newRow[] = rand(10, 99);
    }
    $array[] = $newRow;

    for ($i = 0; $i <= $rows; $i++) {
        $array[$i][] = rand(10, 99);
    }

    return $array;
}

$array = [
    [11, 12, 13],
    [21, 22, 23],
    [31, 32, 33],
];

$newArray = addRowAndColumn($array);
print_r($newArray);
?>