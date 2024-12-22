<?php

$num = 1357;
$isAllOdd = true;

foreach (str_split((string)$num) as $digit) {
    if ($digit % 2 == 0) {
        $isAllOdd = false;
        break;
    }
}

if ($isAllOdd) {
    echo "Все цифры нечетные.";
} else {
    echo "Не все цифры нечетные.";
}
?>