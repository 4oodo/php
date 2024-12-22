<?php

$string = 'a1b2c3d4';
$letterCount = 0;

for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_alpha($string[$i])) {
        $letterCount++;
    }
}

if ($letterCount <= 3) {
    echo "В строке не более трех букв.";
} else {
    echo "В строке более трех букв.";
}
?>