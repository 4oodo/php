<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подсчет символов</title>
</head>
<body>
    <form method="post">
        <label for="inputString">Введите строку:</label>
        <input type="text" id="inputString" name="inputString">
        <button type="submit">Подсчитать символы</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $charCount = strlen($inputString);
        echo "<p>Количество символов в введенной строке: $charCount</p>";
    }
    ?>
</body>
</html>