<?php

function isValidDate($date) {
    $parts = explode('-', $date);
    if (count($parts) !== 3) {
        return false;
    }

    list($year, $month, $day) = $parts;

    return checkdate((int)$month, (int)$day, (int)$year);
}

// Пример использования
$date = '2023-02-29';
$result = isValidDate($date);
echo $result ? "Дата существует." : "Дата не существует.";
?>
