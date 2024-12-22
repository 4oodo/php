<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$n = 3;

$twoDimensionalArray = array_chunk($arr, $n);

print_r($twoDimensionalArray);
?>