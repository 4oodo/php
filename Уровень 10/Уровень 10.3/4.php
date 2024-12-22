<?php
function evaluateExpression($expression) {
    // Используем регулярное выражение для извлечения чисел и оператора
    preg_match('/(\d+)\s*([\+\-\*\/])\s*(\d+)/', $expression, $matches);

    if (count($matches) != 4) {
        return "Invalid expression";
    }

    $num1 = (int)$matches[1];
    $operator = $matches[2];
    $num2 = (int)$matches[3];

    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Division by zero error";
            }
            return $num1 / $num2;
        default:
            return "Invalid operator";
    }
}

// Пример использования
$expression = '10 + 20';
echo evaluateExpression($expression); // Вывод: 30
?>