<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Последний символ строки</title>
</head>
<body>
    <?php
    $lastChar = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["stringInput"];
        if (!empty($inputString)) {
            $lastChar = substr($inputString, -1);
        }
    }
    ?>
    <form method="post">
        <label for="stringInput">Введите строку:</label>
        <input type="text" id="stringInput" name="stringInput">
        <button type="submit">Показать последний символ</button>
    </form>
    <?php if (!empty($lastChar)): ?>
        <p>Последний символ: <?php echo $lastChar; ?></p>
    <?php endif; ?>
</body>
</html>