<?php
$array = [
    [11, 12, 13],
    [21, 22, 23],
    [31, 32, 33],
];

foreach ($array as &$row) {
    $row[] = rand(40, 49);
}

print_r($array);
?>