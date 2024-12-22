<?php

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$sum = 0;

foreach ($array as $subArray) {
    foreach ($subArray as $element) {
        $sum += $element;
    }
}

echo $sum;
?>
