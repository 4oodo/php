<?php
function generateUniqueRandomNumbers($n, $min, $max) {
    if ($max - $min + 1 < $n) {
        throw new InvalidArgumentException("Диапазон слишком мал для генерации $n уникальных чисел.");
    }

    $numbers = range($min, $max);
    shuffle($numbers);

    return array_slice($numbers, 0, $n);
}

// Пример использования:
$n = 5;
$min = 1;
$max = 10;
$uniqueRandomNumbers = generateUniqueRandomNumbers($n, $min, $max);
print_r($uniqueRandomNumbers);
?>