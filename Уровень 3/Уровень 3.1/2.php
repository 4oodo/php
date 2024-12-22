<?php

$array = [1, '', 2, 3, '', 5];
$result = array_filter($array, function($value) {
    return $value !== '';
});

print_r($result);
?>
