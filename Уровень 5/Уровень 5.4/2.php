<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сумма чисел</title>
</head>
<body>
    <?php
    $sum = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST['numbers'] as $number) {
            if (is_numeric($number)) {
                $sum += $number;
            }
        }
    }
    ?>
    <form method="post">
        <label for="numbers[]">Число 1:</label>
        <input type="text" name="numbers[]"><br>
        <label for="numbers[]">Число 2:</label>
        <input type="text" name="numbers[]"><br>
        <label for="numbers[]">Число 3:</label>
        <input type="text" name="numbers[]"><br>
        <button type="submit">Посчитать сумму</button>
    </form>
    <p>Сумма: <?php echo $sum; ?></p>
</body>
</html>