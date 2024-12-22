<?php

$array = [10, 15, 23, 30, 42, 55, 60, 73, 85, 90];

$containsThree = array_filter($array, function($number) {
    return strpos((string)$number, '3') !== false;
});

if (!empty($containsThree)) {
    echo "Массив содержит число с цифрой 3.";
} else {
    echo "Массив не содержит числа с цифрой 3.";
}
?>