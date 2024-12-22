<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friday the 13th Dates</title>
</head>
<body>
    <form method="post" action="">
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $year = intval($_POST['year']);
        echo "<h2>Friday the 13th dates in $year:</h2>";
        echo "<ul>";

        for ($month = 1; $month <= 12; $month++) {
            $date = strtotime("$year-$month-13");
            if (date('N', $date) == 5) {
                echo "<li>" . date('Y-m-d', $date) . "</li>";
            }
        }

        echo "</ul>";
    }
    ?>
</body>
</html>