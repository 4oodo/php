<?php

$array = [
    [
        [11, 12, 13],
        [14, 15, 16],
        [17, 17, 19],
    ],
    [
        [21, 22, 23],
        [24, 25, 26],
        [27, 27, 29],
    ],
    [
        [31, 32, 33],
        [34, 35, 36],
        [37, 37, 39],
    ],
];

$sum = 0;

foreach ($array as $subArray1) {
    foreach ($subArray1 as $subArray2) {
        foreach ($subArray2 as $element) {
            $sum += $element;
        }
    }
}

echo "Сумма всех элементов: $sum";
?>
