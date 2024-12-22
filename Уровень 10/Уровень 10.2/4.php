<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заполненная таблица</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Заполненная таблица</h1>
    <table>
        <?php
        $size = 5;
        for ($i = 0; $i < $size; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $size - $i; $j++) {
                echo "<td>+</td>";
            }
            for ($j = $size - $i; $j < $size; $j++) {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>