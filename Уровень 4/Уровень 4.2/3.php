<?php

function getLeapYears() {
    $currentYear = date('Y');
    $leapYears = [];

    for ($year = $currentYear - 100; $year <= $currentYear; $year++) {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            $leapYears[] = $year;
        }
    }

    return $leapYears;
}

print_r(getLeapYears());
?>
