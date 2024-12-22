<?php

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$inputNumber = 13;
$result = isPrime($inputNumber);
echo $inputNumber . " " . ($result ? "простое число" : "не простое число");
?>