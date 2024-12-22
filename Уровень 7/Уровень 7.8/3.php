<?php
$array = [];

// Generate the first half of the array
for ($i = 1; $i <= 5; $i++) {
    $array[] = implode('', range(1, $i));
}

// Generate the second half of the array
for ($i = 4; $i >= 1; $i--) {
    $array[] = implode('', range(1, $i));
}

print_r($array);
?>