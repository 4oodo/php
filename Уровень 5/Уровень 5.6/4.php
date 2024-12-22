<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Определение дня недели</title>
</head>
<body>
    <?php
    $date = '';
    $dayOfWeek = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST["dateInput"];
        if (!empty($date)) {
            $timestamp = strtotime($date);
            $dayOfWeek = date("l", $timestamp); // Get the day of the week in English
        }
    }
    ?>
    <form method="post">
        <label for="dateInput">Введите дату (в формате 2025-12-31):</label>
        <input type="date" id="dateInput" name="dateInput" value="<?php echo htmlspecialchars($date); ?>" required>
        <button type="submit">Отправить</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($dayOfWeek)): ?>
        <p>День недели: <?php echo $dayOfWeek; ?></p>
    <?php endif; ?>
</body>
</html>