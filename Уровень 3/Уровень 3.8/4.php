<?php

function snakeToCamelCase($string) {
    $str = str_replace('_', ' ', strtolower($string));
    $str = lcfirst(str_replace(' ', '', ucwords($str)));
    return $str;
}

$inputString = 'snake_case_example';
$resultString = snakeToCamelCase($inputString);

echo $resultString;
?>