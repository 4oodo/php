<?php
$arr = [
    [1, 2, 3, 4, 5],
    [1, 2, 3],
    [1, 2],
];

$maxLength = max(array_map('count', $arr));

foreach ($arr as &$subarray) {
    while (count($subarray) < $maxLength) {
        $subarray[] = '';
    }
}

print_r($arr);
?>