<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка Email</title>
</head>
<body>
    <?php
    $message = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["emailInput"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Email корректный.";
        } else {
            $message = "Email некорректный.";
        }
    }
    ?>
    <form method="post">
        <label for="emailInput">Введите email:</label>
        <input type="text" id="emailInput" name="emailInput">
        <button type="submit">Проверить</button>
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>