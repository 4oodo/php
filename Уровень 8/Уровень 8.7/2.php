<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пары множителей</title>
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
        echo "<ul>";
        for ($i = 1; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $factor1 = $i;
                $factor2 = $number / $i;
                echo "<li>$factor1 x $factor2</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>