<?php

$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3, 4, 5];

if (count($arr2) > count($arr1)) {
    $arr2 = array_slice($arr2, 0, count($arr1));
}

print_r($arr2);
?>