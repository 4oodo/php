<?php
$daysInMonth = date('t');
$currentDay = date('j');
$currentMonth = date('F');
$currentYear = date('Y');

$html = "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Дни месяца</title>
    <style>
        .current-day { color: red; }
        .weekend { color: blue; }
    </style>
</head>
<body>
    <h1>Дни месяца: $currentMonth $currentYear</h1>
    <ul>";

for ($day = 1; $day <= $daysInMonth; $day++) {
    $date = "$currentYear-$currentMonth-$day";
    $dayOfWeek = date('N', strtotime($date));
    $class = '';

    if ($day == $currentDay) {
        $class = 'current-day';
    } elseif ($dayOfWeek == 6 || $dayOfWeek == 7) {
        $class = 'weekend';
    }

    $html .= "<li class='$class'>$day</li>";
}

$html .= "</ul>
</body>
</html>";

file_put_contents('days_of_month.html', $html);
echo "HTML файл был создан.";
?>