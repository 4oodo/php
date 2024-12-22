<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фильтрация слов</title>
</head>
<body>
    <?php
   $words = ["пример", "образец", "простой", "исследовать", "яблоко", "мольба"];
    $inputWord = "";
    $filteredWords = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputWord = $_POST["word"];
        $inputLetters = count_chars($inputWord, 1);

        foreach ($words as $word) {
            $wordLetters = count_chars($word, 1);
            $containsAllLetters = true;

            foreach ($inputLetters as $letter => $count) {
                if (!isset($wordLetters[$letter]) || $wordLetters[$letter] < $count) {
                    $containsAllLetters = false;
                    break;
                }
            }

            if ($containsAllLetters) {
                $filteredWords[] = $word;
            }
        }
    }
    ?>

    <form method="post">
        <label for="word">Введите слово:</label>
        <input type="text" id="word" name="word" value="<?php echo htmlspecialchars($inputWord); ?>">
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<ul>";
        foreach ($filteredWords as $word) {
            echo "<li>" . htmlspecialchars($word) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>