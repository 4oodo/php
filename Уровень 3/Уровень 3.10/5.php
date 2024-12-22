<?php

function hasUniqueDigits($number) {
    $digits = str_split((string)$number);
    return count($digits) === count(array_unique($digits));
}

$array = [123, 112, 456, 789, 122, 987];
$result = array_filter($array, 'hasUniqueDigits');

print_r($result);
?><?php
