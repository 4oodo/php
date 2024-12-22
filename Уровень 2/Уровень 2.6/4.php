<?php

$string = 'AbCdE';
$result = '';

for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_upper($string[$i])) {
        $result .= strtolower($string[$i]);
    } else {
        $result .= strtoupper($string[$i]);
    }
}

echo $result; // Output: aBcDe
?>