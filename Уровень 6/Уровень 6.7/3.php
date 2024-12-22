<?php
$year = date('Y');
$month = date('m');
$lastDay = date('t', strtotime("$year-$month-01"));

echo "<select>";
for ($day = 1; $day <= $lastDay; $day++) {
    echo "<option value='$day'>" . htmlspecialchars($day) . "</option>";
}
echo "</select>";
?>