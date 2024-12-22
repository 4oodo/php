<?php
function primeFactors($n) {
    echo "Пошаговый процесс разложения числа $n на простые множители:\n";
    $factor = 2;
    while ($n > 1) {
        while ($n % $factor == 0) {
            echo "   $n делится на $factor\n";
            $n /= $factor;
        }
        $factor++;
    }
    if ($n > 1) {
        echo "   Остаток: $n\n";
    }
}

$number = 60;
primeFactors($number);
?>