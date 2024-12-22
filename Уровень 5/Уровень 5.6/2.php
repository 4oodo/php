<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подсчет слов</title>
</head>
<body>
    <?php
    $wordCount = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["textInput"];
        if (!empty($text)) {
            $wordCount = str_word_count($text);
        }
    }
    ?>
    <form method="post">
        <label for="textInput">Введите текст:</label>
        <textarea id="textInput" name="textInput" rows="4" cols="50"></textarea>
        <button type="submit">Отправить</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Количество слов: <?php echo $wordCount; ?></p>
    <?php endif; ?>
</body>
</html>