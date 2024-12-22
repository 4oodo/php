<?php
function sieveOfEratosthenes($limit) {
    $sieve = array_fill(0, $limit + 1, true);
    $sieve[0] = $sieve[1] = false; // 0 and 1 are not prime numbers

    for ($i = 2; $i * $i <= $limit; $i++) {
        if ($sieve[$i]) {
            for ($j = $i * $i; $j <= $limit; $j += $i) {
                $sieve[$j] = false;
            }
        }
    }

    $primes = [];
    for ($i = 2; $i <= $limit; $i++) {
        if ($sieve[$i]) {
            $primes[] = $i;
        }
    }

    return $primes;
}

$limit = 50; // Example limit
$primes = sieveOfEratosthenes($limit);
print_r($primes);
?>