<?php

$result = [];
for ($i = 0; $i < 5; $i++) {
    $row = [];
    for ($j = 1; $j <= 3; $j++) {
        $row[] = $j;
    }
    $result[] = $row;
}

print_r($result);
?>