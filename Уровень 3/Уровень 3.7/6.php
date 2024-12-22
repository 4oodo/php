<?php

function duplicateSingleDigitNumbers($array) {
    $result = [];
    foreach ($array as $number) {
        $result[] = $number;
        if ($number >= 0 && $number <= 9) {
            $result[] = $number;
        }
    }
    return $result;
}

$numbers = [1, 12, 3, 45, 6, 78, 9];
$duplicatedNumbers = duplicateSingleDigitNumbers($numbers);

print_r($duplicatedNumbers);
?>