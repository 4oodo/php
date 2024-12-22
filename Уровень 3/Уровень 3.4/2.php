<?php

$array = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($array) - 1; $i += 2) {
    $temp = $array[$i];
    $array[$i] = $array[$i + 1];
    $array[$i + 1] = $temp;
}

print_r($array);
?>