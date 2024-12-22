<?php

$array = [1, 2, 3, 3, 4, 5];
$hasConsecutiveDuplicates = false;

for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] == $array[$i + 1]) {
        $hasConsecutiveDuplicates = true;
        break;
    }
}

if ($hasConsecutiveDuplicates) {
    echo "В массиве есть два одинаковых элемента подряд.";
} else {
    echo "В массиве нет двух одинаковых элементов подряд.";
}
?>