<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка счастливого билета</title>
</head>
<body>
    <?php
    $number = "";
    $isLuckyTicket = false;
    $errorMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if (preg_match('/^\d{6}$/', $number)) {
            $firstHalf = substr($number, 0, 3);
            $secondHalf = substr($number, 3, 3);
            $sumFirstHalf = array_sum(str_split($firstHalf));
            $sumSecondHalf = array_sum(str_split($secondHalf));
            $isLuckyTicket = ($sumFirstHalf == $sumSecondHalf);
        } else {
            $errorMessage = "Введите корректное шестизначное число.";
        }
    }
    ?>

    <form method="post">
        <label for="number">Введите шестизначное число:</label>
        <input type="text" id="number" name="number" value="<?php echo htmlspecialchars($number); ?>">
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($errorMessage) {
            echo "<p>$errorMessage</p>";
        } else {
            if ($isLuckyTicket) {
                echo "<p>Число $number является счастливым билетом.</p>";
            } else {
                echo "<p>Число $number не является счастливым билетом.</p>";
            }
        }
    }
    ?>
</body>
</html>
