<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сумма двух чисел</title>
</head>
<body>
    <form method="post" action="">
        <label for="number1">Число 1:</label>
        <input type="number" id="number1" name="number1" required>
        <br>
        <label for="number2">Число 2:</label>
        <input type="number" id="number2" name="number2" required>
        <br>
        <input type="submit" value="Вычислить сумму">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $sum = $number1 + $number2;
        echo "<p>Сумма $number1 и $number2 равна: $sum</p>";
    }
    ?>
</body>
</html>