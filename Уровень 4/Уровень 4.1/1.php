<?php

function getCurrentDayOfWeek() {
    $daysOfWeek = [
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'
    ];
    $currentDayIndex = date('w');
    return $daysOfWeek[$currentDayIndex];
}

echo getCurrentDayOfWeek();
?>