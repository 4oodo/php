<?php
function generateString() {
    $parts = [];
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            $parts[] = $i . $j;
        }
    }
    return implode(' ', $parts);
}

echo generateString();
?>