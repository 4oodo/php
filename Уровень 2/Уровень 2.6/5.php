<?php

$array = [1, 2, 3, 4, 5, 6];
$mergedArray = [];

for ($i = 0; $i < count($array); $i += 2) {
    $mergedArray[] = (int)($array[$i] . $array[$i + 1]);
}

print_r($mergedArray); // Output: Array ( [0] => 12 [1] => 34 [2] => 56 )
?>