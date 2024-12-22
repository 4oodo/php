<?php

$number = 35142;
$digits = str_split($number);
sort($digits);
$sortedNumber = implode('', $digits);

echo $sortedNumber;
?>