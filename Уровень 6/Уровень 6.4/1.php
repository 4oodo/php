<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск пятниц 13-го</title>
</head>
<body>
    <form method="post" action="">
        <label for="year">Введите год:</label>
        <input type="number" id="year" name="year" required>
        <button type="submit">Найти пятницы 13-е</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = intval($_POST["year"]);
        echo "<ul>";
        for ($month = 1; $month <= 12; $month++) {
            $date = strtotime("$year-$month-13");
            if (date("N", $date) == 5) {
                echo "<li>" . date("F j, Y", $date) . "</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>