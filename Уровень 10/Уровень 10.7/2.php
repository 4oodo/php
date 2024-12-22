<?php
function calculateFractionOperation($input) {
    // Extract fractions and operator
    preg_match('/(\d+\/\d+)\s*([\+\-\*\/])\s*(\d+\/\d+)/', $input, $matches);
    if (count($matches) !== 4) {
        die("Invalid input format.");
    }

    list(, $fraction1, $operator, $fraction2) = $matches;

    // Convert fractions to numerators and denominators
    list($num1, $den1) = explode('/', $fraction1);
    list($num2, $den2) = explode('/', $fraction2);

    // Convert to integers
    $num1 = (int)$num1;
    $den1 = (int)$den1;
    $num2 = (int)$num2;
    $den2 = (int)$den2;

    // Calculate the result based on the operator
    switch ($operator) {
        case '+':
            $numerator = $num1 * $den2 + $num2 * $den1;
            $denominator = $den1 * $den2;
            break;
        case '-':
            $numerator = $num1 * $den2 - $num2 * $den1;
            $denominator = $den1 * $den2;
            break;
        case '*':
            $numerator = $num1 * $num2;
            $denominator = $den1 * $den2;
            break;
        case '/':
            $numerator = $num1 * $den2;
            $denominator = $den1 * $num2;
            break;
        default:
            die("Invalid operator.");
    }

    // Simplify the fraction
    $gcd = gcd($numerator, $denominator);
    $numerator /= $gcd;
    $denominator /= $gcd;

    return "{$numerator}/{$denominator}";
}

function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

// Example usage
$input = '2/3 + 3/4';
$result = calculateFractionOperation($input);
echo $result;
?>