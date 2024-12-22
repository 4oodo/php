<?php

$array = [123, 456, 789];
$reversedArray = [];

foreach ($array as $number) {
    $reversedArray[] = (int)strrev((string)$number);
}

print_r($reversedArray);
?>