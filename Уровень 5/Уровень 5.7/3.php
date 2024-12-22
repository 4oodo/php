<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Валидация формы</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <?php
    $name = $email = $age = "";
    $nameErr = $emailErr = $ageErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Имя обязательно";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[а-яА-ЯёЁa-zA-Z-' ]*$/u", $name)) {
                $nameErr = "Допустимы только буквы и пробелы";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email обязателен";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Неверный формат email";
            }
        }

        if (empty($_POST["age"])) {
            $ageErr = "Возраст обязателен";
        } else {
            $age = test_input($_POST["age"]);
            if (!is_numeric($age) || $age < 0 || $age > 120) {
                $ageErr = "Неверный возраст";
            }
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <span class="error"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <label for="age">Возраст:</label>
        <input type="text" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>">
        <span class="error"><?php echo $ageErr; ?></span><br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>