<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Разделение текста на предложения</title>
</head>
<body>
    <?php
    $text = "";
    $sentences = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    }
    ?>

    <form method="post">
        <label for="text">Введите текст:</label>
        <textarea id="text" name="text" rows="10" cols="50"><?php echo htmlspecialchars($text); ?></textarea>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<ul>";
        foreach ($sentences as $sentence) {
            echo "<li>" . htmlspecialchars($sentence) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>