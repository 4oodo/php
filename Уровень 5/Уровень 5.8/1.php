<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сохранение выбора в селекте</title>
</head>
<body>
    <?php
    $selectedOption = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedOption = $_POST["options"];
    }
    ?>

    <form method="post">
        <label for="options">Выберите опцию:</label>
        <select id="options" name="options">
            <option value="option1" <?php if ($selectedOption == "option1") echo "selected"; ?>>Option 1</option>
            <option value="option2" <?php if ($selectedOption == "option2") echo "selected"; ?>>Option 2</option>
            <option value="option3" <?php if ($selectedOption == "option3") echo "selected"; ?>>Option 3</option>
        </select>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>