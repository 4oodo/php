<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список чисел</title>
</head>
<body>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>