<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сохранение состояния чекбокса</title>
</head>
<body>
    <?php
    $isChecked = isset($_POST['checkbox']) ? 'checked' : '';
    ?>

    <form method="post">
        <label for="checkbox">Отметьте чекбокс:</label>
        <input type="checkbox" id="checkbox" name="checkbox" <?php echo $isChecked; ?>>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($isChecked) {
            echo "<p>Чекбокс отмечен.</p>";
        } else {
            echo "<p>Чекбокс не отмечен.</p>";
        }
    }
    ?>
</body>
</html>