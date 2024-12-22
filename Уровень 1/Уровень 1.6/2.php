<?php

$array = [1, 4, 9, 16, 25];
$sumOfSquareRoots = array_sum(array_map(fn($x) => sqrt($x), $array));

echo $sumOfSquareRoots . "\n";
?>
