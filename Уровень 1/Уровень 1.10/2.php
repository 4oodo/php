<?php

$number = 12345;
$numberStr = strval($number);
$reversedStr = strrev($numberStr);

for ($i = 0; $i < strlen($reversedStr); $i++) {
    echo $reversedStr[$i] . PHP_EOL;
}
?>
