<?php

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Пример использования
$year = 2024;
if (isLeapYear($year)) {
    echo "$year является високосным годом.";
} else {
    echo "$year не является високосным годом.";
}
?>
