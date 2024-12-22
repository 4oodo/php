<?php

function isStringDigitsOnly($string) {
    return ctype_digit($string);
}

$inputString = '123456';
if (isStringDigitsOnly($inputString)) {
    echo "Строка состоит только из цифр.";
} else {
    echo "Строка не состоит только из цифр.";
}
?>