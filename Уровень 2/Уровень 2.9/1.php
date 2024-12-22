<?php

$number = '123456';
$sum = 0;

for ($i = 0; $i < strlen($number); $i += 2) {
    $pair = substr($number, $i, 2);
    $sum += (int)$pair;
}

echo $sum;
?>