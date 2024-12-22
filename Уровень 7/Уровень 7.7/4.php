<?php
function generateArray($n) {
    $result = [];
    $str = '';
    for ($i = 1; $i <= $n; $i++) {
        $str .= $i;
        $result[] = $str;
    }
    return $result;
}

$array = generateArray(5);
print_r($array);
?>