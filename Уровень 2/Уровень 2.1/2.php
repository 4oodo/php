<?php

for ($i = 1; $i <= 1000; $i++) {
    $str = strval($i);
    if (strlen($str) > 1) {
        $firstDigit = intval($str[0]);
        $secondDigit = intval($str[1]);
        if ($firstDigit + $secondDigit == 5) {
            echo $i . PHP_EOL;
        }
    }
}
?>