<?php

function getRandomNumber() {
    static $lastNumber = null;
    do {
        $number = rand();
    } while ($number === $lastNumber);
    $lastNumber = $number;
    return $number;
}

// Example usage
echo getRandomNumber();
?>