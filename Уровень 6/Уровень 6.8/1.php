<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Random Color Text</title>
    <style>
        .colored-char {
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');

    $text = "Ваш текст здесь";
    $colors = ["red", "green", "blue", "orange", "purple", "brown", "pink"];
    $lastColor = "";

    echo "<p>";
    for ($i = 0; $i < mb_strlen($text); $i++) {
        do {
            $color = $colors[array_rand($colors)];
        } while ($color == $lastColor);
        $lastColor = $color;
        echo "<span class='colored-char' style='color: $color;'>" . htmlspecialchars(mb_substr($text, $i, 1)) . "</span>";
    }
    echo "</p>";
    ?>
</body>
</html>