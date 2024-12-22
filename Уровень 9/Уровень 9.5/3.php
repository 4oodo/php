<?php
function func($number, $form1, $form2, $form3) {
    $n = abs($number) % 100;
    $n1 = $n % 10;

    if ($n > 10 && $n < 20) {
        return "$number $form3";
    }
    if ($n1 > 1 && $n1 < 5) {
        return "$number $form2";
    }
    if ($n1 == 1) {
        return "$number $form1";
    }
    return "$number $form3";
}

// Examples
echo func(1, 'яблоко', 'яблока', 'яблок') . "\n"; // 1 яблоко
echo func(2, 'яблоко', 'яблока', 'яблок') . "\n"; // 2 яблока
echo func(5, 'яблоко', 'яблока', 'яблок') . "\n"; // 5 яблок
echo func(11, 'яблоко', 'яблока', 'яблок') . "\n"; // 11 яблок
echo func(21, 'яблоко', 'яблока', 'яблок') . "\n"; // 21 яблоко
echo func(1223421, 'яблоко', 'яблока', 'яблок') . "\n"; // 1223421 яблоко
?>