<?php

function randomLatinLettersArray($length) {
    $letters = range('a', 'z');
    $result = [];

    for ($i = 0; $i < $length; $i++) {
        $result[] = $letters[array_rand($letters)];
    }

    return $result;
}

// Example usage
$length = 10;
$result = randomLatinLettersArray($length);
print_r($result);
?>