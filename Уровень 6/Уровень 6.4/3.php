<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка тройки Пифагора</title>
</head>
<body>
    <form method="post" action="">
        <label for="a">Введите первое число:</label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Введите второе число:</label>
        <input type="number" id="b" name="b" required>
        <br>
        <label for="c">Введите третье число:</label>
        <input type="number" id="c" name="c" required>
        <br>
        <button type="submit">Проверить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = intval($_POST["a"]);
        $b = intval($_POST["b"]);
        $c = intval($_POST["c"]);

        $numbers = [$a, $b, $c];
        sort($numbers);

        $x = $numbers[0];
        $y = $numbers[1];
        $z = $numbers[2];

        if ($z * $z == $x * $x + $y * $y) {
            echo "<p>Числа $a, $b и $c являются тройкой Пифагора.</p>";
        } else {
            echo "<p>Числа $a, $b и $c не являются тройкой Пифагора.</p>";
        }
    }
    ?>
</body>
</html>