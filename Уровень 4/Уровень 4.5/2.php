<?php

function isFractionString($str) {
    return preg_match('/^\d+\/\d+$/', $str);
}

$inputString = "3/4";
$result = isFractionString($inputString);
echo $inputString . " " . ($result ? "является дробью" : "не является дробью");
?>