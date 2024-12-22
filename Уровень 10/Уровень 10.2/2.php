<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Избыточные числа</title>
</head>
<body>
    <h1>Найти избыточные числа</h1>
    <form method="post">
        <label for="start">Начало диапазона:</label>
        <input type="number" id="start" name="start" required><br><br>
        <label for="end">Конец диапазона:</label>
        <input type="number" id="end" name="end" required><br><br>
        <input type="submit" value="Найти">
    </form>

    <?php
    function isAbundant($number) {
        $sum = 0;
        for ($i = 1; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }
        return $sum > $number;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = $_POST['start'];
        $end = $_POST['end'];

        echo "<h2>Избыточные числа в диапазоне от $start до $end:</h2>";
        echo "<ul>";

        for ($i = $start; $i <= $end; $i++) {
            if (isAbundant($i)) {
                echo "<li>$i</li>";
            }
        }

        echo "</ul>";
    }
    ?>
</body>
</html>