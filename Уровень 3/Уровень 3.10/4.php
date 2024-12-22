<?php

function getPositionsOfThree($number) {
    $numberStr = (string)$number;
    $positions = [];

    for ($i = 0; $i < strlen($numberStr); $i++) {
        if ($numberStr[$i] == '3') {
            $positions[] = $i;
        }
    }

    if (count($positions) > 2) {
        array_shift($positions);
        array_pop($positions);
    } else {
        $positions = [];
    }

    return $positions;
}

$number = 123345633;
$result = getPositionsOfThree($number);

print_r($result);
?>
