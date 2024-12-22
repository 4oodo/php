<?php
function findRepeatingSequence($numerator, $denominator) {
    $remainder = $numerator % $denominator;
    $seenRemainders = [];
    $decimalPart = '';

    while ($remainder != 0 && !isset($seenRemainders[$remainder])) {
        $seenRemainders[$remainder] = strlen($decimalPart);
        $remainder *= 10;
        $decimalPart .= floor($remainder / $denominator);
        $remainder %= $denominator;
    }

    if ($remainder == 0) {
        return '';
    } else {
        $start = $seenRemainders[$remainder];
        return substr($decimalPart, $start);
    }
}


$numerator = 1;
$denominator = 3;
$repeatingSequence = findRepeatingSequence($numerator, $denominator);
echo "Повторяющаяся последовательность: '$repeatingSequence'";
?>