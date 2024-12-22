<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Дни до ближайшего Дня Рождения</title>
</head>
<body>
    <?php
    $birthday = "";
    $daysUntilBirthday = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthday = $_POST["birthday"];
        $currentDate = new DateTime();
        $nextBirthday = DateTime::createFromFormat('Y-m-d', $birthday);
        $nextBirthday->setDate($currentDate->format('Y'), $nextBirthday->format('m'), $nextBirthday->format('d'));

        if ($nextBirthday < $currentDate) {
            $nextBirthday->modify('+1 year');
        }

        $interval = $currentDate->diff($nextBirthday);
        $daysUntilBirthday = $interval->days;
    }
    ?>

    <form method="post">
        <label for="birthday">Введите день рождения (формат: 2025-12-31):</label>
        <input type="date" id="birthday" name="birthday" value="<?php echo htmlspecialchars($birthday); ?>">
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($daysUntilBirthday !== "") {
        echo "<p>До вашего ближайшего Дня Рождения осталось $daysUntilBirthday дней.</p>";
    }
    ?>
</body>
</html>