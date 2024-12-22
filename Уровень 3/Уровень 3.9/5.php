<?php

$result = [];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    $row = [];
    for ($j = 0; $j < 3; $j++) {
        $row[] = $value++;
    }
    $result[] = $row;
}

print_r($result);
?>