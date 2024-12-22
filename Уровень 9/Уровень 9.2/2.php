<?php
function primeFactorization($num) {
    if ($num <= 1) {
        return "Введите число больше 1.";
    }

    $factors = [];
    $divisor = 2;

    while ($num > 1) {
        while ($num % $divisor == 0) {
            $factors[] = $divisor;
            $num /= $divisor;
        }
        $divisor++;
    }

    return implode(' × ', $factors);
}

// Обработка формы
$result = '';
if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];

    if ($number > 1) {
        $result = "Разложение числа $number на простые множители: " . primeFactorization($number);
    } else {
        $result = "Введите число больше 1.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разложение числа на простые множители</title>
</head>
<body>
<form method="post">
    <label for="number">Введите целое число:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Разложить</button>
</form>

<p><?php echo $result; ?></p>
</body>
</html>
