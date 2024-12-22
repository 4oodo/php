<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Calculate Days Between Dates</title>
</head>
<body>
    <form method="post" action="">
        <label for="date1">Введите первую дату:</label>
        <input type="date" id="date1" name="date1" required>
        <br>
        <label for="date2">Введите вторую дату:</label>
        <input type="date" id="date2" name="date2" required>
        <br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date1 = new DateTime($_POST["date1"]);
        $date2 = new DateTime($_POST["date2"]);
        $interval = $date1->diff($date2);
        echo "<p>Количество дней между датами: " . $interval->days . "</p>";
    }
    ?>
</body>
</html>