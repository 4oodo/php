<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Общие числа</title>
</head>
<body>
    <form method="post" action="">
        <label for="input1">Введите числа через запятую (первый инпут):</label>
        <input type="text" id="input1" name="input1" required>
        <br>
        <label for="input2">Введите числа через запятую (второй инпут):</label>
        <input type="text" id="input2" name="input2" required>
        <br>
        <button type="submit">Найти общие числа</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input1 = explode(',', $_POST["input1"]);
        $input2 = explode(',', $_POST["input2"]);

        $input1 = array_map('trim', $input1);
        $input2 = array_map('trim', $input2);

        $commonNumbers = array_intersect($input1, $input2);

        echo "<p>Общие числа: " . implode(', ', $commonNumbers) . "</p>";
    }
    ?>
</body>
</html>