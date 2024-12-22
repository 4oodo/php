<?php
function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

function simplifyFraction($fraction) {
    list($numerator, $denominator) = explode('/', $fraction);
    $steps = [];
    while (true) {
        $gcdValue = gcd($numerator, $denominator);
        if ($gcdValue == 1) {
            break;
        }
        $numerator /= $gcdValue;
        $denominator /= $gcdValue;
        $steps[] = "$numerator/$denominator";
    }
    return implode(' = ', $steps);
}

$fraction = '12/16';
echo "$fraction = " . simplifyFraction($fraction);
?>