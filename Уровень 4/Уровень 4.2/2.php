<?php

function daysUntilOrSince($month, $day) {
    $currentDate = new DateTime();
    $targetDate = new DateTime(date('Y') . '-' . $month . '-' . $day);

    if ($targetDate < $currentDate) {
        $targetDate->modify('+1 year');
    }

    $interval = $currentDate->diff($targetDate);
    $days = $interval->days;

    if ($targetDate < $currentDate) {
        return -$days;
    } else {
        return $days;
    }
}

// Example usage
$month = 12;
$day = 25;
echo daysUntilOrSince($month, $day);
?>