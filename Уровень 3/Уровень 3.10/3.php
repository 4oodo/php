<?php

function getCommonDigits($num1, $num2) {
    $digits1 = str_split((string)$num1);
    $digits2 = str_split((string)$num2);
    $commonDigits = array_intersect($digits1, $digits2);
    return array_unique($commonDigits);
}

$num1 = 123456;
$num2 = 345678;
$result = getCommonDigits($num1, $num2);

print_r($result);
?>