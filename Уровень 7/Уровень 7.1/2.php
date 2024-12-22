<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Save Text to File</title>
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
        $file = 'saved_text.txt';

        if (file_put_contents($file, $text) !== false) {
            echo "Текст успешно сохранен в файл.";
        } else {
            echo "Ошибка при сохранении текста в файл.";
        }
    }
    ?>
</body>
</html>