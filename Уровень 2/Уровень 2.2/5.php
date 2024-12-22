<?php

$array = [1, 2, 3, 4, 5, 6];
$length = count($array);
$halfLength = $length / 2;

$firstHalfSum = array_sum(array_slice($array, 0, $halfLength));
$secondHalfSum = array_sum(array_slice($array, $halfLength));

if ($secondHalfSum != 0) {
    $result = $firstHalfSum / $secondHalfSum;
    echo "Результат деления суммы первой половины на сумму второй половины: " . $result;
} else {
    echo "Сумма второй половины равна нулю, деление на ноль невозможно.";
}
?>
