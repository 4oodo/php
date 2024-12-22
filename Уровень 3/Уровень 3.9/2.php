<?php

function isStringEvenDigitsOnly($string) {
    if (!ctype_digit($string)) {
        return false;
    }
    for ($i = 0; $i < strlen($string); $i++) {
        if ((int)$string[$i] % 2 !== 0) {
            return false;
        }
    }
    return true;
}

$inputString = '2468';
if (isStringEvenDigitsOnly($inputString)) {
    echo "Строка состоит только из четных цифр.";
} else {
    echo "Строка не состоит только из четных цифр.";
}
?>