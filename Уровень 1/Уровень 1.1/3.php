<?php

$string = "Hello, world!";

if (strlen($string) > 0) {
    echo "Последний символ строки: " . $string[strlen($string) - 1];
} else {
    echo "Строка пустая.";
}
?>