<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление возраста</title>
</head>
<body>
    <form method="post" action="">
        <label for="dob">Введите вашу дату рождения (ГГГГ-ММ-ДД):</label>
        <input type="date" id="dob" name="dob" required>
        <button type="submit">Вычислить возраст</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dob = $_POST["dob"];
        $dobDate = new DateTime($dob);
        $currentDate = new DateTime();
        $age = $currentDate->diff($dobDate)->y;

        echo "<p>Вам $age лет.</p>";
    }
    ?>
</body>
</html>