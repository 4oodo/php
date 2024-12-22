<?php

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

$lastElement = array_pop($arr1);

$mergedArray = array_merge($arr1, $arr2);

$mergedArray[] = $lastElement;

print_r($mergedArray);
?>верьте, что в этой строке не более двух заглавных букв.