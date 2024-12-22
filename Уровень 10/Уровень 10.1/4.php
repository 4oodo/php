<?php
$array = [
    [11, 12, 13],
    [21, 22, 23],
    [31, 32, 33],
];

$newRow = [];
for ($i = 0; $i < count($array[0]); $i++) {
    $newRow[] = rand(40, 49);
}

$array[] = $newRow;

print_r($array);
?>