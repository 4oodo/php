<?php

$string = 'abcde';
$result = '';

for ($i = 0; $i < strlen($string); $i++) {
    if ($i % 2 == 0) {
        $result .= strtoupper($string[$i]);
    } else {
        $result .= $string[$i];
    }
}

echo $result;
?>
