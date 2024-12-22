<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Случайные числа</title>
</head>
<body>
    <form method="post">
        <?php
        for ($i = 0; $i < 5; $i++) {
            $randomNumber = rand(1, 100); // Generate a random number between 1 and 100
            echo '<label for="input' . $i . '">Число ' . ($i + 1) . ':</label>';
            echo '<input type="text" id="input' . $i . '" name="input' . $i . '" value="' . $randomNumber . '"><br>';
        }
        ?>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>