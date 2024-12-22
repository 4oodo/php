<?php

$string = 'abcde abcde abcde';
$result = preg_replace('/\b\w/', '!', $string);

echo $result;
?>
