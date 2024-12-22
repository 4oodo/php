<?php
$array = [];

for ($i = 1; $i <= 5; $i++) {
    $array[] = array_fill(0, $i, 'x');
}

print_r($array);
?>