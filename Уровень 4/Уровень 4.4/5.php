<?php

function removeEvenDigits($number) {
    $numberStr = strval($number);
    $result = '';

    for ($i = 0; $i < strlen($numberStr); $i++) {
        if ($numberStr[$i] % 2 != 0) {
            $result .= $numberStr[$i];
        }
    }

    return intval($result);
}

$inputNumber = 1234567890;
$result = removeEvenDigits($inputNumber);
echo $result;
?>