<?php
function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

function lcm($a, $b) {
    $gcd = gcd($a, $b);
    $lcm = ($a * $b) / $gcd;

    echo "Пошаговый процесс нахождения НОК для $a и $b:\n";
    echo "1. Найти НОД для $a и $b:\n";
    echo "   НОД($a, $b) = $gcd\n";
    echo "2. Рассчитать НОК по формуле НОК(a, b) = (a * b) / НОД(a, b):\n";
    echo "   НОК($a, $b) = ($a * $b) / $gcd = $lcm\n";

    return $lcm;
}

// Пример использования
$a = 12;
$b = 18;
$lcm = lcm($a, $b);
echo "НОК для $a и $b: $lcm\n";
?>