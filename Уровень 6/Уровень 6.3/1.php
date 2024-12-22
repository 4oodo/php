<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка даты</title>
</head>
<body>
    <form method="post">
        <label for="date">Введите дату (ГГГГ-ММ-ДД):</label>
        <input type="date" id="date" name="date">
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputDate = $_POST['date'];
        $currentYear = date("Y");
        $currentDate = date("Y-m-d");

        if ($inputDate) {
            $inputDateThisYear = $currentYear . substr($inputDate, 4);
            if ($inputDateThisYear < $currentDate) {
                echo "<p>Дата уже прошла в этом году.</p>";
            } else {
                echo "<p>Дата еще не прошла в этом году.</p>";
            }
        } else {
            echo "<p>Пожалуйста, введите корректную дату.</p>";
        }
    }
    ?>
</body>
</html>