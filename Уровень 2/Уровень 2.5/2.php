<?php

$string = 'abcdefg';
$result = '';

for ($i = 0; $i < strlen($string); $i++) {
    if (($i + 1) % 3 != 0) {
        $result .= $string[$i];
    }
}

echo $result;
?><?php
