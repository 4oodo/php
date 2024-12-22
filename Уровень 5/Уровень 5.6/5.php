<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список годов</title>
</head>
<body>
    <ul>
        <?php
        $currentYear = date("Y");
        for ($year = $currentYear - 100; $year <= $currentYear + 100; $year++) {
            echo "<li>$year</li>";
        }
        ?>
    </ul>
</body>
</html>
