<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Частота символов</title>
</head>
<body>
    <form method="post">
        <textarea name="text" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];
        $text = mb_convert_encoding($text, 'UTF-8', 'auto');
        $charFrequency = array_count_values(mb_str_split($text));
        arsort($charFrequency);
        $mostFrequentChar = key($charFrequency);

        echo '<p>Самый частый символ: ' . htmlspecialchars($mostFrequentChar, ENT_QUOTES, 'UTF-8') . '</p>';
    }
    ?>
</body>
</html>