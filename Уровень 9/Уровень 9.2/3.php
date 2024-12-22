<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function getPrimesInRange($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$result = '';
if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = (int)$_POST['start'];
    $end = (int)$_POST['end'];

    if ($start > $end) {
        $result = "Начальное значение должно быть меньше или равно конечному значению.";
    } else {
        $primes = getPrimesInRange($start, $end);
        if (empty($primes)) {
            $result = "В заданном промежутке нет простых чисел.";
        } else {
            $result = "<ul>";
            foreach ($primes as $prime) {
                $result .= "<li>$prime</li>";
            }
            $result .= "</ul>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простые числа в диапазоне</title>
</head>
<body>
<form method="post">
    <label for="start">Начальное значение:</label>
    <input type="number" id="start" name="start" required>
    <label for="end">Конечное значение:</label>
    <input type="number" id="end" name="end" required>
    <button type="submit">Найти простые числа</button>
</form>

<p><?php echo $result; ?></p>
</body>
</html>