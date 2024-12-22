<?php
$year = date('Y');
$weekends = [];

for ($month = 1; $month <= 12; $month++) {
    for ($day = 1; $day <= 31; $day++) {
        if (checkdate($month, $day, $year)) {
            $date = "$year-$month-$day";
            $dayOfWeek = date('N', strtotime($date));
            if ($dayOfWeek == 6 || $dayOfWeek == 7) {
                $weekends[] = $date;
            }
        }
    }
}

echo "<ul>";
foreach ($weekends as $weekend) {
    echo "<li>" . htmlspecialchars($weekend) . "</li>";
}
echo "</ul>";
?>