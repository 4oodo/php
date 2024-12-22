<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сохранить введенный текст</title>
</head>
<body>
    <?php
    $inputText = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST["textInput"];
    }
    ?>
    <form method="post">
        <label for="textInput">Введите текст:</label>
        <input type="text" id="textInput" name="textInput" value="<?php echo htmlspecialchars($inputText); ?>">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
