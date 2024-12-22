<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Транслитерация текста</title>
</head>
<body>
    <?php
    function transliterate($text) {
        $translitTable = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
            'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
            'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
            'я' => 'ya', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo',
            'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
            'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'Kh',
            'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Shch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E',
            'Ю' => 'Yu', 'Я' => 'Ya'
        ];
        return strtr($text, $translitTable);
    }

    $inputText = "";
    $translitText = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST["inputText"];
        $translitText = transliterate($inputText);
    }
    ?>

    <form method="post">
        <label for="inputText">Введите русский текст:</label><br>
        <textarea id="inputText" name="inputText" rows="4" cols="50"><?php echo htmlspecialchars($inputText); ?></textarea><br><br>
        <button type="submit">Транслитерировать</button>
    </form>

    <br>
    <label for="translitText">Транслитированный текст:</label><br>
    <textarea id="translitText" rows="4" cols="50"><?php echo htmlspecialchars($translitText); ?></textarea>
</body>
</html>