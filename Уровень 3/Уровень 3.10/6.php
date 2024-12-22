<?php

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$result = array_merge(...$array);

print_r($result);
?>