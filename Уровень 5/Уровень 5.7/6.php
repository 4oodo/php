<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Валидация номера телефона</title>
    <style>
        .valid { border: 2px solid green; }
        .invalid { border: 2px solid red; }
    </style>
</head>
<body>
    <?php
    $phone = "";
    $phoneClass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $phone = $_POST["phone"];
        // +7 (123) 456-7890
        $pattern = "/^\+7 \(\d{3}\) \d{3}-\d{4}$/";
        if (preg_match($pattern, $phone)) {
            $phoneClass = "valid";
        } else {
            $phoneClass = "invalid";
        }
    }
    ?>

    <form method="post">
        <label for="phone">Введите номер телефона:</label>
        <input type="text" id="phone" name="phone" class="<?php echo $phoneClass; ?>" value="<?php echo htmlspecialchars($phone); ?>">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>