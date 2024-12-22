<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка високосного года</title>
</head>
<body>
    <?php
    $year = '';
    $isLeapYear = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["yearInput"];
        if (!empty($year) && is_numeric($year)) {
            $isLeapYear = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
        }
    }
    ?>
    <form method="post">
        <label for="yearInput">Введите год:</label>
        <input type="text" id="yearInput" name="yearInput" value="<?php echo htmlspecialchars($year); ?>" required>
        <button type="submit">Отправить</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p><?php echo $year; ?> - это <?php echo $isLeapYear ? 'високосный' : 'не високосный'; ?> год.</p>
    <?php endif; ?>
</body>
</html>