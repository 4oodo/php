<?php
function extendArray(&$array, $num) {
    $targetLength = $num * $num;
    while (count($array) < $targetLength) {
        $array[] = '';
    }
}

$arr = [1, 2, 3, 4, 5, 6];
$num = 3;
extendArray($arr, $num);
print_r($arr);
?>