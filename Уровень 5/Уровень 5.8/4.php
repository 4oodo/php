<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сумма введенных чисел</title>
</head>
<body>
    <?php
    $numbers = "";
    $sum = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = $_POST["numbers"];
        $numbersArray = explode(",", $numbers);
        foreach ($numbersArray as $number) {
            $sum += (float)trim($number);
        }
    }
    ?>

    <form method="post">
        <label for="numbers">Введите числа через запятую:</label>
        <input type="text" id="numbers" name="numbers" value="<?php echo htmlspecialchars($numbers); ?>">
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Сумма введенных чисел: $sum</p>";
    }
    ?>
</body>
</html>