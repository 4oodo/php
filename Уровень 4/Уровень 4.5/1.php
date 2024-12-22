<?php

function isNumericString($str) {
    return ctype_digit($str);
}

// Пример использования
$inputString = "123456";
$result = isNumericString($inputString);
echo $inputString . " " . ($result ? "является числовой строкой" : "не является числовой строкой");
?>