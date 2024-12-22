<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Birth Date and Day of the Week</title>
</head>
<body>
    <form method="post" action="">
        <label for="birthdate">Введите дату рождения (год-месяц-день):</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST["birthdate"];
        $birthYear = (int)date("Y", strtotime($birthdate));
        $currentYear = (int)date("Y");

        echo "<table border='1'>";
        echo "<tr><th>Дата рождения</th><th>День недели</th></tr>";

        for ($year = $birthYear; $year <= $currentYear; $year++) {
            $date = "{$year}-" . date("m-d", strtotime($birthdate));
            $dayOfWeek = strftime("%A", strtotime($date));
            echo "<tr><td>{$date}</td><td>{$dayOfWeek}</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>