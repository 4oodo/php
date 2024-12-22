<?php

function sumOfFibonacci($n) {
    if ($n <= 0) {
        return 0;
    }

    $a = 0;
    $b = 1;
    $sum = $a + $b;

    for ($i = 2; $i < $n; $i++) {
        $next = $a + $b;
        $sum += $next;
        $a = $b;
        $b = $next;
    }

    return $sum;
}

$n = 10;
$result = sumOfFibonacci($n);
echo "Сумма первых $n чисел Фибоначчи: " . $result;
?>