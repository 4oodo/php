<?php
$array = [];

for ($i = 1; $i <= 5; $i++) {
    $subArray = [];
    for ($j = 1; $j <= $i; $j++) {
        $subArray[] = $j;
    }
    $array[] = $subArray;
}

print_r($array);
?>