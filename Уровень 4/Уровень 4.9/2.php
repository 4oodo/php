<?php

function getNextMaslenitsa() {
    $currentYear = date('Y');
    $lastDayOfWinter = new DateTime("$currentYear-02-28");

    if (checkdate(2, 29, $currentYear)) {
        $lastDayOfWinter = new DateTime("$currentYear-02-29");
    }

    while ($lastDayOfWinter->format('N') != 7) {
        $lastDayOfWinter->modify('-1 day');
    }

    return $lastDayOfWinter->format('Y-m-d');
}

// Example usage
echo getNextMaslenitsa();
?>