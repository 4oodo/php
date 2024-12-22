<?php

function getRandomElements($array, $n) {
    if ($n > count($array)) {
        return null;
    }
    $keys = array_rand($array, $n);
    $randomElements = [];
    foreach ($keys as $key) {
        $randomElements[] = $array[$key];
    }
    return $randomElements;
}

$arr = [1, 2, 3, 4, 5];
print_r(getRandomElements($arr, 3));
?><?php
