<?php
function getWeekDays() {
    $weekDays = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];

    $currentDay = date('w');

    $prevDay = $weekDays[($currentDay - 1 + 7) % 7];
    $currDay = $weekDays[$currentDay];
    $nextDay = $weekDays[($currentDay + 1) % 7];

    return [
        'prev' => $prevDay,
        'curr' => $currDay,
        'next' => $nextDay,
    ];
}

$result = getWeekDays();
print_r($result);
?>
