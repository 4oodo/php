<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Делители числа</title>
</head>
<body>
    <?php
    $number = "";
    $divisors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if (is_numeric($number) && $number > 0) {
            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i == 0) {
                    $divisors[] = $i;
                }
            }
        } else {
            echo "<p class='error'>Введите положительное число.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="number">Введите число:</label>
        <input type="text" id="number" name="number" value="<?php echo htmlspecialchars($number); ?>">
        <button type="submit">Отправить</button>
    </form>

    <?php
    if (!empty($divisors)) {
        echo "<p>Делители числа $number: " . implode(", ", $divisors) . "</p>";
    }
    ?>
</body>
</html>