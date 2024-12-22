<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сумма цифр числа</title>
</head>
<body>
    <?php
    $result = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["numberInput"];
        if (is_numeric($number)) {
            $sum = array_sum(str_split(abs($number)));
            $result = "Сумма цифр числа $number равна $sum";
        } else {
            $result = "Пожалуйста, введите число.";
        }
    }
    ?>
    <form method="post">
        <label for="numberInput">Введите число:</label>
        <input type="text" id="numberInput" name="numberInput">
        <button type="submit">Найти сумму цифр</button>
    </form>
    <p><?php echo $result; ?></p>
</body>
</html>