<?php

function hasOnlyOneDivisor($number) {
    $divisorCount = 0;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $divisorCount++;
        }
    }

    return $divisorCount == 1;
}

$number = 10;
$result = hasOnlyOneDivisor($number);

if ($result) {
    echo "Число $number имеет только один делитель, кроме него самого и единицы.";
} else {
    echo "Число $number не имеет только одного делителя, кроме него самого и единицы.";
}
?>