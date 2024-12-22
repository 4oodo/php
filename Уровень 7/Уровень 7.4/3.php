<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск слова</title>
</head>
<body>
    <form method="post">
        <label for="word">Введите слово:</label>
        <input type="text" id="word" name="word" required>
        <button type="submit">Поиск</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $word = $_POST['word'];
        $file = 'path/to/your/file.txt';

        if (file_exists($file)) {
            $content = file_get_contents($file);
            if (strpos($content, $word) !== false) {
                echo "Слово '$word' найдено в файле.";
            } else {
                echo "Слово '$word' не найдено в файле.";
            }
        } else {
            echo "Файл не существует.";
        }
    }
    ?>
</body>
</html>