<?php

$number = '123789';
$result = '';

for ($i = 0; $i < strlen($number); $i++) {
    if ((int)$number[$i] % 2 == 0) {
        $result .= $number[$i];
    }
}

echo $result;
?>