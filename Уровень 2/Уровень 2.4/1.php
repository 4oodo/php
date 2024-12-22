<?php

$string = "abc123def";
$position = -1;

for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_digit($string[$i])) {
        $position = $i;
        break;
    }
}

if ($position !== -1) {
    echo "Позиция первой цифры: " . $position;
} else {
    echo "В строке нет цифр.";
}
?>
