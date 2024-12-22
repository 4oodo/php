<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Общие делители чисел</title>
</head>
<body>
    <?php
    $number1 = $number2 = "";
    $commonDivisors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        if (is_numeric($number1) && $number1 > 0 && is_numeric($number2) && $number2 > 0) {
            $minNumber = min($number1, $number2);
            for ($i = 1; $i <= $minNumber; $i++) {
                if ($number1 % $i == 0 && $number2 % $i == 0) {
                    $commonDivisors[] = $i;
                }
            }
        } else {
            echo "<p class='error'>Введите положительные числа.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="number1">Введите первое число:</label>
        <input type="text" id="number1" name="number1" value="<?php echo htmlspecialchars($number1); ?>"><br>
        <label for="number2">Введите второе число:</label>
        <input type="text" id="number2" name="number2" value="<?php echo htmlspecialchars($number2); ?>"><br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if (!empty($commonDivisors)) {
        echo "<ul>Общие делители чисел $number1 и $number2:";
        foreach ($commonDivisors as $divisor) {
            echo "<li>$divisor</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>