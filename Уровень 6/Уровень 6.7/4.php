<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Генерация нулей</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Введите число:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $zeros = str_repeat("0", $number);
        echo "<p>" . htmlspecialchars($zeros) . "</p>";
    }
    ?>
</body>
</html>