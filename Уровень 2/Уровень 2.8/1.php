<?php

$string = 'aBcDeF';
$uppercaseCount = 0;

for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_upper($string[$i])) {
        $uppercaseCount++;
    }
}

if ($uppercaseCount <= 2) {
    echo "В строке не более двух заглавных букв.";
} else {
    echo "В строке более двух заглавных букв.";
}
?>