<?php

function allNumbersContainDigitThree($array) {
    foreach ($array as $number) {
        if (strpos((string)$number, '3') === false) {
            return false;
        }
    }
    return true;
}

$numbers = [13, 23, 35, 43];
$allContainThree = allNumbersContainDigitThree($numbers);

if ($allContainThree) {
    echo "Все числа содержат цифру 3.";
} else {
    echo "Не все числа содержат цифру 3.";
}
?>