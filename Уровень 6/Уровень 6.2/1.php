<?php
$rows = 4;
$cols = 3;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Генерация таблицы</title>
</head>
<body>
    <table border="1">
        <?php
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                echo "<td>Строка $i, Колонка $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>