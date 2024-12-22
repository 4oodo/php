<?php

$string = "example";

if (strlen($string) > 1) {
    $secondToLastChar = $string[strlen($string) - 2];
    echo "Предпоследний символ строки: " . $secondToLastChar;
} else {
    echo "Строка содержит один символ или пуста.";
}
?>
