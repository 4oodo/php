<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Дружественные числа</title>
</head>
<body>
    <form method="post">
        <label for="start">Начало:</label>
        <input type="number" id="start" name="start" required>
        <label for="end">Конец:</label>
        <input type="number" id="end" name="end" required>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = intval($_POST["start"]);
        $end = intval($_POST["end"]);

        function sumOfDivisors($num) {
            $sum = 1; // 1 является делителем любого числа
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $sum += $i;
                    if ($i != $num / $i) {
                        $sum += $num / $i;
                    }
                }
            }
            return $sum;
        }

        function findAmicableNumbers($start, $end) {
            $amicablePairs = [];
            for ($i = $start; $i <= $end; $i++) {
                $sum1 = sumOfDivisors($i);
                if ($sum1 > $i && $sum1 <= $end) {
                    $sum2 = sumOfDivisors($sum1);
                    if ($sum2 == $i) {
                        $amicablePairs[] = [$i, $sum1];
                    }
                }
            }
            return $amicablePairs;
        }

        $amicableNumbers = findAmicableNumbers($start, $end);

        if (!empty($amicableNumbers)) {
            echo "<ul>";
            foreach ($amicableNumbers as $pair) {
                echo "<li>{$pair[0]} и {$pair[1]}</li>";
            }
            echo "</ul>";
        } else {
            echo "В заданном диапазоне не найдено дружественных чисел.";
        }
    }
    ?>
</body>
</html>