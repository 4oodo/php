<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$numColumns = isset($_POST['columns']) ? (int)$_POST['columns'] : 0;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Динамическая таблица</title>
</head>
<body>
<form method="post" action="">
    <label for="columns">Количество колонок:</label>
    <input type="number" id="columns" name="columns" min="1" max="<?php echo count($data); ?>" required>
    <button type="submit">Создать таблицу</button>
</form>

<?php if ($numColumns > 0): ?>
    <table border="1">
        <tr>
            <?php
            $rowCount = 0;
            foreach ($data as $index => $value) {
                echo "<td>$value</td>";
                $rowCount++;
                if ($rowCount % $numColumns == 0) {
                    echo "</tr><tr>";
                }
            }
            ?>
        </tr>
    </table>
<?php endif; ?>
</body>
</html>