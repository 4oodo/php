<?php

$array = ['one', 'two', 'three', 'four', 'five', 'six'];

$result = array_filter($array, function($word) {
    return strlen($word) <= 3;
});

print_r($result);
?>