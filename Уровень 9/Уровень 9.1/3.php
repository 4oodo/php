<?php
$str = 'abcde abcde';
$del = 'abe';

$delArray = str_split($del);

$result = str_replace($delArray, '', $str);

echo $result;
?>