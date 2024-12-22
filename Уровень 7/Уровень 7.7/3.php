<?php
function countDigitThree($array) {
    $count = 0;
    foreach ($array as $number) {
        $count += substr_count((string)$number, '3');
    }
    return $count;
}

$numbers = [123, 345, 678, 333, 303];
$totalThrees = countDigitThree($numbers);
echo "Общее количество цифр '3': " . $totalThrees;
?>