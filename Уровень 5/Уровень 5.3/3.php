<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сравнение чисел</title>
</head>
<body>
    <?php
    $result = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        if (is_numeric($number1) && is_numeric($number2)) {
            if ($number1 > $number2) {
                $result = "Большее число: $number1";
            } elseif ($number2 > $number1) {
                $result = "Большее число: $number2";
            } else {
                $result = "Оба числа равны: $number1";
            }
        } else {
            $result = "Пожалуйста, введите два целых числа.";
        }
    }
    ?>
    <form method="post">
        <label for="number1">Введите первое число:</label>
        <input type="text" id="number1" name="number1">
        <br>
        <label for="number2">Введите второе число:</label>
        <input type="text" id="number2" name="number2">
        <br>
        <button type="submit">Сравнить</button>
    </form>
    <p><?php echo $result; ?></p>
</body>
</html>