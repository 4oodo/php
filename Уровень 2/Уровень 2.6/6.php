<?php

$string = 'aaa bbb ccc eee fff';
$words = explode(' ', $string);

for ($i = 1; $i < count($words); $i += 2) {
    $words[$i] = ucfirst($words[$i]);
}

$result = implode(' ', $words);

echo $result;
?>
