<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка совершенного числа</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Введите число:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = intval($_POST['number']);
        $sum = 0;

        for ($i = 1; $i < $number; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }

        if ($sum == $number) {
            echo "<p>$number является совершенным числом.</p>";
        } else {
            echo "<p>$number не является совершенным числом.</p>";
        }
    }
    ?>
</body>
</html>