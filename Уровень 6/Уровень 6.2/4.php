<?php
$data = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
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
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>