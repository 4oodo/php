<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подсчет слов</title>
</head>
<body>
    <?php
    $text = "";
    $word = "";
    $count = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $word = $_POST["word"];
        $count = substr_count(mb_strtolower($text), mb_strtolower($word));
    }
    ?>

    <form method="post">
        <label for="text">Введите текст:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"><?php echo htmlspecialchars($text); ?></textarea><br><br>
        <label for="word">Введите слово:</label><br>
        <input type="text" id="word" name="word" value="<?php echo htmlspecialchars($word); ?>"><br><br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Слово '$word' встречается $count раз(а) в введенном тексте.</p>";
    }
    ?>
</body>
</html>