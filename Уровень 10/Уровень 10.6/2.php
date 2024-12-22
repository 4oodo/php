<?php
function areParenthesesBalanced($string) {
    $stack = [];
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        if ($string[$i] == '(') {
            array_push($stack, '(');
        } elseif ($string[$i] == ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }

    return empty($stack);
}

// Примеры использования
var_dump(areParenthesesBalanced('()()'));
var_dump(areParenthesesBalanced('(())'));
var_dump(areParenthesesBalanced('())'));
var_dump(areParenthesesBalanced('))(('));
?>