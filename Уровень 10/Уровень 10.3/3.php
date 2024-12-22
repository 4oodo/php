<?php
function divide_in_columns($dividend, $divisor) {

    $dividend_str = (string)$dividend;
    $divisor_str = (string)$divisor;

    $dividend_len = strlen($dividend_str);
    $divisor_len = strlen($divisor_str);

    $quotient = intdiv($dividend, $divisor);
    $remainder = $dividend % $divisor;

    echo "Процесс деления $dividend на $divisor:\n\n";

    echo str_pad($dividend_str, $dividend_len + 2, ' ', STR_PAD_LEFT) . "\n";
    echo "÷" . str_pad($divisor_str, $divisor_len, ' ', STR_PAD_LEFT) . "\n";
    echo str_repeat('-', $dividend_len + 2) . "\n";

    $partial_dividend = 0;
    for ($i = 0; $i < $dividend_len; $i++) {
        $partial_dividend = $partial_dividend * 10 + (int)$dividend_str[$i];
        $quotient_digit = intdiv($partial_dividend, $divisor);
        $partial_remainder = $partial_dividend % $divisor;

        echo str_pad($partial_dividend, $dividend_len + 2, ' ', STR_PAD_LEFT) . " | " . $quotient_digit . "\n";
        echo str_repeat('-', $dividend_len + 2) . "\n";
        $partial_dividend = $partial_remainder;
    }

    // Выводим итог
    echo "Частное: " . $quotient . "\n";
    echo "Остаток: " . $remainder . "\n";
}

// Пример использования
divide_in_columns(1234, 5);
?>
