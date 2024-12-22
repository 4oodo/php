<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сохранение выбора радио-кнопок</title>
</head>
<body>
    <?php
    $selectedOption = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedOption = $_POST["option"];
    }
    ?>

    <form method="post">
        <label>
            <input type="radio" name="option" value="option1" <?php if ($selectedOption == "option1") echo "checked"; ?>>
            Опция 1
        </label><br>
        <label>
            <input type="radio" name="option" value="option2" <?php if ($selectedOption == "option2") echo "checked"; ?>>
            Опция 2
        </label><br>
        <label>
            <input type="radio" name="option" value="option3" <?php if ($selectedOption == "option3") echo "checked"; ?>>
            Опция 3
        </label><br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>