<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Дни до Нового Года</title>
</head>
<body>
    <?php
    $currentDate = new DateTime();
    $newYear = new DateTime('next year January 1');
    $interval = $currentDate->diff($newYear);
    $daysLeft = $interval->days;
    echo "<p>До Нового Года осталось: $daysLeft дней</p>";
    ?>
</body>
</html>