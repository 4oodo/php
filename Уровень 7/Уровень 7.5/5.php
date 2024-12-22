<?php
function generateArray() {
    $result = [];
    for ($i = 5; $i > 0; $i--) {
        $result[] = array_fill(0, $i, 'x');
    }
    return $result;
}

$array = generateArray();
print_r($array);
?>