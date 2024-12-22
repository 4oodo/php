<?php

for ($i = 10; $i <= 1000; $i++) {
    $numberStr = (string)$i;
    $secondLastDigit = $numberStr[strlen($numberStr) - 2];

    if ($secondLastDigit % 2 == 0) {
        echo $i . "\n";
    }
}
?>
