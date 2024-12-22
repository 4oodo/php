<?php

$array = [1, 2, 3, 4, 5];
$sumOfSquares = array_sum(array_map(fn($x) => $x * $x, $array));

echo $sumOfSquares . "\n";
?>
