<?php

$array = [1.456, 2.125, 3.32, 4.1, 5.34];
$roundedArray = array_map(fn($x) => round($x, 1), $array);

print_r($roundedArray);
?>
