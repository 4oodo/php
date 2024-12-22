<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Факториал числа</title>
</head>
<body>
    <?php
    $result = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["numberInput"];
        if (is_numeric($number) && $number >= 0) {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            $result = "Факториал числа $number равен $factorial";
        } else {
            $result = "Пожалуйста, введите неотрицательное число.";
        }
    }
    ?>
    <form method="post">
        <label for="numberInput">Введите число:</label>
        <input type="text" id="numberInput" name="numberInput">
        <button type="submit">Вычислить факториал</button>
    </form>
    <p><?php echo $result; ?></p>
</body>
</html>