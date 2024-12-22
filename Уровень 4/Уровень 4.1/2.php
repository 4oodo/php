<?php

function getDayOfWeek($date) {
    $daysOfWeek = [
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'
    ];
    $dateTime = new DateTime($date);
    $dayIndex = $dateTime->format('w');
    return $daysOfWeek[$dayIndex];
}

// Example usage
$date = '2023-12-25';
echo getDayOfWeek($date);
?>
