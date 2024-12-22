<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Highlight Words</title>
    <style>
        .highlight {
            color: red;
        }
    </style>
</head>
<body>
    <div id="text">
        <?php
        $text = "Это пример текста, в котором нужно выделить некоторые слова.";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputWords = explode(" ", $_POST["words"]);
            foreach ($inputWords as $word) {
                $text = preg_replace("/\b" . preg_quote($word, '/') . "\b/u", "<span class='highlight'>$0</span>", $text);
            }
        }
        echo $text;
        ?>
    </div>

    <form method="post" action="">
        <label for="words">Введите слова через пробел:</label>
        <input type="text" id="words" name="words" required>
        <br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>