<?php

$array = [1, 2, 3, 4, 5, 6, 2, 3, 2];
$valueToRemove = 2;

$array = array_filter($array, fn($element) => $element !== $valueToRemove);

print_r($array);
?>
