<?php

function getRandomElement($array) {
    static $lastElement = null;
    if (empty($array)) {
        return null;
    }
    do {
        $index = array_rand($array);
        $element = $array[$index];
    } while ($element === $lastElement);
    $lastElement = $element;
    return $element;
}

$arr = [1, 2, 3, 4, 5];
echo getRandomElement($arr);
?>