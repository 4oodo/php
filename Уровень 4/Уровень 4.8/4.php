<?php

function getPrimesInRange($start, $end) {
    $primes = [];
    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {
            $primes[] = $num;
        }
    }
    return $primes;
}

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Example usage
print_r(getPrimesInRange(10, 50));
?>