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
        <textarea id="textInput" name="textInput"><?php echo htmlspecialchars($inputText); ?></textarea>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>