<?php
$year = date('Y');
$month = date('m');
$lastDay = date('t', strtotime("$year-$month-01"));
$lastDate = "$year-$month-$lastDay";
$dayOfWeek = strftime('%A', strtotime($lastDate));

echo "<p>Последний день месяца: " . htmlspecialchars($dayOfWeek) . "</p>";
?>