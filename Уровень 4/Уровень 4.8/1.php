<?php

function getRandomElement($array) {
    if (empty($array)) {
        return null;
    }
    $index = array_rand($array);
    return $array[$index];
}

$arr = [1, 2, 3, 4, 5];
echo getRandomElement($arr);
?>