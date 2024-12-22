<?php
function generateString() {
    $result = '';
    for ($i = 1; $i <= 4; $i++) {
        $result .= '-' . $i . ($i + 1);
    }
    $result .= '-';
    return $result;
}

echo generateString();
?>