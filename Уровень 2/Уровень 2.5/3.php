<?php

$array = [1, 2, 3, 4, 5, 6];
$evenSum = 0;
$oddSum = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 == 0) {
        $evenSum += $array[$i];
    } else {
        $oddSum += $array[$i];
    }
}

if ($oddSum != 0) {
    $result = $evenSum / $oddSum;
    echo $result;
} else {
    echo "Division by zero error.";
}
?>
