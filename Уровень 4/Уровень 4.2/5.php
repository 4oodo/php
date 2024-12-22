<?php

function daysUntilEndOfMonth() {
    $currentDate = new DateTime();
    $endOfMonth = new DateTime($currentDate->format('Y-m-t'));
    $interval = $currentDate->diff($endOfMonth);
    return $interval->days;
}

// Example usage
echo daysUntilEndOfMonth();
?>