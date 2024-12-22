<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка дружественных чисел</title>
</head>
<body>
<form method="post" action="">
    <label for="number1">Введите первое число:</label>
    <input type="number" id="number1" name="number1" required>
    <br>
    <label for="number2">Введите второе число:</label>
    <input type="number" id="number2" name="number2" required>
    <br>
    <button type="submit">Отправить</button>
</form>

<?php
function sum_of_divisors($num) {
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = intval($_POST['number1']);
    $number2 = intval($_POST['number2']);

    $sum1 = sum_of_divisors($number1);
    $sum2 = sum_of_divisors($number2);

    if ($sum1 == $number2 && $sum2 == $number1) {
        echo "<p>$number1 и $number2 являются дружественными числами.</p>";
    } else {
        echo "<p>$number1 и $number2 не являются дружественными числами.</p>";
    }
}
?>
</body>
</html>