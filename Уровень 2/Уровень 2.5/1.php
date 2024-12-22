<?php

$string = '023m0df0dfg0';
$positions = [];

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === '0') {
        $positions[] = $i;
    }
}

print_r($positions);
?><?php
