<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Sort Words Alphabetically</title>
</head>
<body>
    <form method="post" action="">
        <label for="text">Введите текст:</label>
        <textarea id="text" name="text" rows="10" cols="30" required></textarea>
        <br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $words = preg_split('/\s+/', $text);
        $words = array_unique($words);
        sort($words, SORT_STRING | SORT_FLAG_CASE);
        echo "<p>Отсортированные слова:</p><ul>";
        foreach ($words as $word) {
            echo "<li>" . htmlspecialchars($word) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>