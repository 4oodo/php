<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка числа 13</title>
</head>
<body>
    <?php
    $numbers = "";
    $containsThirteen = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = $_POST["numbers"];
        $numbersArray = explode(",", $numbers);
        foreach ($numbersArray as $number) {
            if (trim($number) == "13") {
                $containsThirteen = true;
                break;
            }
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
        if ($containsThirteen) {
            echo "<p>Среди введенных чисел есть число 13.</p>";
        } else {
            echo "<p>Среди введенных чисел нет числа 13.</p>";
        }
    }
    ?>
</body>
</html>