<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Разбить число на цифры</title>
</head>
<body>
    <?php
    $digits = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["numberInput"];
        if (is_numeric($number)) {
            $digits = str_split($number);
        }
    }
    ?>
    <form method="post">
        <label for="numberInput">Введите число:</label>
        <input type="text" id="numberInput" name="numberInput">
        <button type="submit">Разбить</button>
    </form>
    <?php if (!empty($digits)): ?>
        <ul>
            <?php foreach ($digits as $digit): ?>
                <li><?php echo $digit; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>