<?php
function gcd($a, $b) {
    echo "Пошаговый процесс нахождения НОД для $a и $b:\n";
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
        if ($b != 0) {
            echo "   Остаток от деления: $a % $b = " . ($a % $b) . "\n";
        }
    }
    echo "   НОД($a, $b) = $a\n";
    return $a;
}

// Пример использования
$a = 48;
$b = 18;
$gcd = gcd($a, $b);
echo "НОД для $a и $b: $gcd\n";
?>