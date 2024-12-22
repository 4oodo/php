<?php

$number = 60;
$divisors = [];

for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $divisors[] = $i;
    }
}

print_r($divisors);
?>