<?php
function drawCalendar() {
    $currentDay = date('j');
    $currentMonth = date('n');
    $currentYear = date('Y');
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
    $firstDayOfMonth = date('w', strtotime("$currentYear-$currentMonth-01"));
    $weekDays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    echo '<table class="calendar">';
    echo '<tr>';
    foreach ($weekDays as $day) {
        echo "<th>$day</th>";
    }
    echo '</tr><tr>';

    for ($i = 0; $i < $firstDayOfMonth; $i++) {
        echo '<td></td>';
    }

    for ($day = 1; $day <= $daysInMonth; $day++) {
        $class = '';
        if ($day == $currentDay) {
            $class = 'current-day';
        } elseif (date('w', strtotime("$currentYear-$currentMonth-$day")) == 0 || date('w', strtotime("$currentYear-$currentMonth-$day")) == 6) {
            $class = 'weekend';
        }

        echo "<td class='$class'>$day</td>";

        if (date('w', strtotime("$currentYear-$currentMonth-$day")) == 6) {
            echo '</tr><tr>';
        }
    }

    echo '</tr>';
    echo '</table>';
}

drawCalendar();
?>
<style>
    .calendar {
        width: 100%;
        border-collapse: collapse;
    }
    .calendar th, .calendar td {
        border: 1px solid #ddd;
        width: 14.28%;
        height: 100px;
        text-align: center;
        vertical-align: middle;
    }
    .calendar .current-day {
        background-color: yellow;
    }
    .calendar .weekend {
        background-color: lightgray;
    }
</style>
