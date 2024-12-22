<?php

$number = '123456'; // Замените на ваше число
$isAscending = true;

for ($i = 0; $i < strlen($number) - 1; $i++) {
    if ($number[$i] > $number[$i + 1]) {
        $isAscending = false;
        break;
    }
}

if ($isAscending) {
    echo "Цифры числа расположены по возрастанию.";
} else {
    echo "Цифры числа не расположены по возрастанию.";
}
?>
