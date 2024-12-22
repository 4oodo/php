<?php
$arr = [
    ['href' => 'page1.html', 'text' => 'text1'],
    ['href' => 'page2.html', 'text' => 'text2'],
    ['href' => 'page3.html', 'text' => 'text3'],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список ссылок</title>
</head>
<body>
    <ul>
        <?php
        foreach ($arr as $item) {
            echo '<li><a href="' . $item['href'] . '">' . $item['text'] . '</a></li>';
        }
        ?>
    </ul>
</body>
</html>