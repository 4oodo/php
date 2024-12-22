<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Случайный элемент массива</title>
</head>
<body>
    <?php
    $array = ["Element 1", "Element 2", "Element 3", "Element 4", "Element 5"];
    $randomElement = $array[array_rand($array)];
    ?>

    <p>Случайный элемент массива: <?php echo $randomElement; ?></p>
</body>
</html>