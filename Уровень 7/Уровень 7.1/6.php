<?php
$array = [];

for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 0; $j < 3; $j++) {
        $subArray[] = [1, 2, 3];
    }
    $array[] = $subArray;
}

print_r($array);
?>