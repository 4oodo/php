<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка числа</title>
    <style>
        .odd {
            border: 2px solid red;
        }
        .even {
            border: 2px solid green;
        }
    </style>
</head>
<body>
    <?php
    $class = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["numberInput"];
        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                $class = 'even';
            } else {
                $class = 'odd';
            }
        }
    }
    ?>
    <form method="post">
        <label for="numberInput">Введите число:</label>
        <input type="text" id="numberInput" name="numberInput" class="<?php echo $class; ?>">
        <button type="submit">Проверить</button>
    </form>
</body>
</html>