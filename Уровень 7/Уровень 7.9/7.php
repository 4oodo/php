<?php
function generateArray() {
    $result = [];
    for ($i = 1; $i <= 9; $i += 2) {
        $result[] = $i * 10 + ($i + 1);
    }
    return $result;
}

print_r(generateArray());
?>