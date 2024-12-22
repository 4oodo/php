<?php

$numbersString = "1, 5, 3, 9, 2";
$numbersArray = array_map('intval', explode(',', $numbersString));
$maxNumber = max($numbersArray);

echo "Максимальное число: $maxNumber";
?>