<?php
function multiplyInColumn($num1, $num2) {
    $num1 = strval($num1);
    $num2 = strval($num2);
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    // Perform multiplication digit by digit
    for ($i = $len1 - 1; $i >= 0; $i--) {
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $product = ($num1[$i] - '0') * ($num2[$j] - '0');
            $sum = $product + $result[$i + $j + 1];
            $result[$i + $j + 1] = $sum % 10;
            $result[$i + $j] += intdiv($sum, 10);
        }
    }

    // Convert result array to string
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');

    // Display the process
    echo str_repeat(' ', $len2) . $num1 . "\n";
    echo 'x' . str_repeat(' ', $len1 - 1) . $num2 . "\n";
    echo str_repeat('-', max($len1, $len2) + 1) . "\n";

    for ($i = $len2 - 1; $i >= 0; $i--) {
        $partialProduct = strval(($num2[$i] - '0') * intval($num1));
        echo str_repeat(' ', $len2 - 1 - $i) . $partialProduct . str_repeat(' ', $i) . "\n";
    }

    echo str_repeat('-', max($len1, $len2) + 1) . "\n";
    echo $resultStr . "\n";
}

// Example usage
multiplyInColumn(123, 45);
?>