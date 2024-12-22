<?php

$string = "example";
$length = strlen($string);

if ($length > 1) {
    $string = substr($string, 0, $length - 2) . substr($string, $length - 1);
}

echo $string;
?>