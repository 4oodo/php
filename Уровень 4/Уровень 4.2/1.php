<?php

function removeZeros($number) {

    $numberStr = (string)$number;

    $numberStr = str_replace('0', '', $numberStr);

    return (int)$numberStr;
}

// Example usage
$number = 102030;
echo removeZeros($number);
?>