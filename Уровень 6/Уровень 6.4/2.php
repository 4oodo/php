<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Извлечение первых слов предложений</title>
</head>
<body>
    <form method="post" action="">
        <label for="text">Введите текст:</label>
        <textarea id="text" name="text" rows="10" cols="50" required></textarea>
        <button type="submit">Извлечь первые слова</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
        $firstWords = [];

        foreach ($sentences as $sentence) {
            $words = preg_split('/\s+/', trim($sentence));
            if (!empty($words)) {
                $firstWords[] = $words[0];
            }
        }

        echo "<ul>";
        foreach ($firstWords as $word) {
            echo "<li>" . htmlspecialchars($word) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>