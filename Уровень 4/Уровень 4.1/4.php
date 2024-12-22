<?php

function trimString($length, $string) {
    return mb_substr($string, 0, $length);
}

$length = 5;
$string = "Привет, мир!";
echo trimString($length, $string); // Вывод: Приве
?>