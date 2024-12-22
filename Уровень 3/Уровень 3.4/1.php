<?php

for ($i = 10; $i <= 1000; $i++) {
    $firstDigit = (int)strval($i)[0];
    if ($firstDigit % 2 == 0) {
        echo $i . "\n";
    }
}
?>
