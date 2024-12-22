<?php

$num = 12345;
$digits = str_split($num);
$allGreaterThanZero = true;

foreach ($digits as $digit) {
    if ($digit == '0') {
        $allGreaterThanZero = false;
        break;
    }
}

if ($allGreaterThanZero) {
    echo "Все цифры больше нуля.";
} else {
    echo "Не все цифры больше нуля.";
}
?>