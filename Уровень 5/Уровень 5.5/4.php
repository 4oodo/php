<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Разделить дату</title>
</head>
<body>
    <?php
    $year = $month = $day = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST["dateInput"];
        if (!empty($date)) {
            list($year, $month, $day) = explode('-', $date);
        }
    }
    ?>
    <form method="post">
        <label for="dateInput">Введите дату (гггг-мм-дд):</label>
        <input type="date" id="dateInput" name="dateInput" required>
        <button type="submit">Отправить</button>
    </form>
    <?php if (!empty($year) && !empty($month) && !empty($day)): ?>
        <p>Год: <?php echo $year; ?></p>
        <p>Месяц: <?php echo $month; ?></p>
        <p>День: <?php echo $day; ?></p>
    <?php endif; ?>
</body>
</html>