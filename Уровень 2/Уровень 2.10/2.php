<?php

$number = '123456';
$length = strlen($number);

for ($i = $length - 1; $i >= 0; $i--) {
    if ((int)$number[$i] % 2 == 0) {
        echo $number[$i];
        break;
    }
}
?>
