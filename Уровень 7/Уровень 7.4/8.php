<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка счастливого билета</title>
</head>
<body>
    <form method="post">
        <label for="number">Введите число с чётным количеством цифр:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Проверить</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];

        if (ctype_digit($number) && strlen($number) % 2 === 0) {
            $halfLength = strlen($number) / 2;
            $firstHalf = substr($number, 0, $halfLength);
            $secondHalf = substr($number, $halfLength);

            $sumFirstHalf = array_sum(str_split($firstHalf));
            $sumSecondHalf = array_sum(str_split($secondHalf));

            if ($sumFirstHalf === $sumSecondHalf) {
                echo "<p>Число $number является счастливым билетом!</p>";
            } else {
                echo "<p>Число $number не является счастливым билетом.</p>";
            }
        } else {
            echo "<p>Пожалуйста, введите корректное число с чётным количеством цифр.</p>";
        }
    }
    ?>
</body>
</html>