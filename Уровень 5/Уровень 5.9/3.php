<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форматирование даты</title>
</head>
<body>
    <?php
    $date = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST["date"];
        $dateObject = DateTime::createFromFormat('Y-m-d', $date);
        if ($dateObject) {
            $date = $dateObject->format('d.m.Y');
        } else {
            $date = "Неверный формат даты";
        }
    }
    ?>

    <form method="post">
        <label for="date">Введите дату (формат: 2025-12-31):</label>
        <input type="text" id="date" name="date" value="<?php echo htmlspecialchars($date); ?>">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>