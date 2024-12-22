<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Случайные абзацы</title>
    <style>
        .random-paragraph {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php
    $n = 5; // Количество генерируемых абзацев
    $colors = ['red', 'green', 'blue', 'yellow', 'purple', 'orange', 'pink', 'brown', 'gray', 'black'];
   $texts = [
    "Привет, как дела?",
    "Сегодня прекрасная погода.",
    "Я не люблю программировать на PHP.",
    "Этот текст генерируется случайным образом.",
    "Удачного дня!"
];

    for ($i = 0; $i < $n; $i++) {
        $randomColor = $colors[array_rand($colors)];
        $randomText = $texts[array_rand($texts)];
        echo "<p class='random-paragraph' style='color: $randomColor;'>$randomText</p>";
    }
    ?>
</body>
</html>