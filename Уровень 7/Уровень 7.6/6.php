<?php
$data = [
    2018 => [
        11 => [
            29 => [1, 2, 3],
            30 => [4, 5],
        ],
        12 => [
            30 => [6, 7],
            31 => [8, 9],
        ],
    ],
    2019 => [
        12 => [
            29 => [10, 11],
            30 => [12, 13],
            31 => [14, 15],
        ]
    ],
];

function flattenArray($array) {
    $result = [];
    array_walk_recursive($array, function($item) use (&$result) {
        $result[] = $item;
    });
    return $result;
}

$flatArray = flattenArray($data);
print_r($flatArray);
?>