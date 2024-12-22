<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Перевернуть слово</title>
</head>
<body>
    <?php
    $result = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = $_POST["wordInput"];
        if (!empty($word)) {
            $reversedWord = strrev($word);
            $result = "Перевернутое слово: $reversedWord";
        } else {
            $result = "Пожалуйста, введите слово.";
        }
    }
    ?>
    <form method="post">
        <label for="wordInput">Введите слово:</label>
        <input type="text" id="wordInput" name="wordInput">
        <button type="submit">Перевернуть</button>
    </form>
    <p><?php echo $result; ?></p>
</body>
</html>