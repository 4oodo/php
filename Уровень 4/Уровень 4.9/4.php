<?php

function getCommonDivisors($numbers) {
    if (empty($numbers)) {
        return [];
    }

    function findDivisors($num) {
        $divisors = [];
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisors[] = $i;
            }
        }
        return $divisors;
    }

    $commonDivisors = findDivisors($numbers[0]);

    foreach ($numbers as $number) {
        $divisors = findDivisors($number);
        $commonDivisors = array_intersect($commonDivisors, $divisors);
    }

    return array_values($commonDivisors);
}

print_r(getCommonDivisors([12, 24, 36]));
?>