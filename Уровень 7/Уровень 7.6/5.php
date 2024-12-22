<?php
$array = [];

for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}

print_r($array);
?>