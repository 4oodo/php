<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сортировка слов</title>
</head>
<body>
    <?php
    $text = "";
    $sortedWords = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $words = preg_split('/\s+/', mb_strtolower($text));
        $uniqueWords = array_unique($words);
        sort($uniqueWords);
        $sortedWords = $uniqueWords;
    }
    ?>

    <form method="post">
        <label for="text">Введите текст:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"><?php echo htmlspecialchars($text); ?></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Слова в алфавитном порядке без дублей:</p>";
        echo "<ul>";
        foreach ($sortedWords as $word) {
            echo "<li>" . htmlspecialchars($word) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>