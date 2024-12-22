<?php

$array = [10, 20, 30, 40, 50];
$increasedArray = array_map(fn($x) => $x * 1.1, $array);

print_r($increasedArray);
?>