<?php

function secondLargest($numbers) {
    if (count($numbers) < 2) {
        throw new InvalidArgumentException("Массив должен содержать как минимум два элемента.");
    }

    $first = $second = PHP_INT_MIN;

    foreach ($numbers as $number) {
        if ($number > $first) {
            $second = $first;
            $first = $number;
        } elseif ($number > $second && $number != $first) {
            $second = $number;
        }
    }

    if ($second == PHP_INT_MIN) {
        throw new RuntimeException("Второй по величине элемент не найден.");
    }

    return $second;
}

// Пример использования
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
$result = secondLargest($numbers);
echo "Второе по величине число: " . $result;
?>