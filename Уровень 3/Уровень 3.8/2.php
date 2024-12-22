<?php

function kebabToSnakeCase($string) {
    return str_replace('-', '_', $string);
}

$inputString = 'kebab-case-example';
$resultString = kebabToSnakeCase($inputString);

echo $resultString;
?>