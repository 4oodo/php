<?php

$string = 'a1b2c3d4e5f6';
$positions = [];

for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_digit($string[$i])) {
        $positions[] = $i;
    }
}

print_r($positions);
?><?php
