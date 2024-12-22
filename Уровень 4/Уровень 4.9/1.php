<?php

function daysUntilNextLeapDay() {
    $currentYear = date('Y');
    $currentDate = new DateTime();

    // Find the next leap year
    while (!checkdate(2, 29, $currentYear)) {
        $currentYear++;
    }

    $nextLeapDay = new DateTime("$currentYear-02-29");
    $interval = $currentDate->diff($nextLeapDay);

    return $interval->days;
}

// Example usage
echo daysUntilNextLeapDay();
?>