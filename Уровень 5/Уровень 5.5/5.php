<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Age Check</title>
</head>
<body>
    <?php
    $isAdult = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isAdult = isset($_POST["isAdult"]);
    }
    ?>
    <form method="post">
        <label for="isAdult">Вам уже есть 18 лет?</label>
        <input type="checkbox" id="isAdult" name="isAdult">
        <button type="submit">Отправить</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if ($isAdult): ?>
            <div class="adult">
                <h2>for adult</h2>
                <p>text text text</p>
            </div>
        <?php else: ?>
            <div class="child">
                <h2>for child</h2>
                <p>text text text</p>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>