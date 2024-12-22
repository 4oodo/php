<?php

function randomLatinLettersString($length) {
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $result .= $letters[rand(0, strlen($letters) - 1)];
    }

    return $result;
}

$length = 10;
$result = randomLatinLettersString($length);
echo $result;
?>