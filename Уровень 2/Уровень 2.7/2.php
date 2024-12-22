<?php

$char = 'A';

if (ctype_upper($char)) {
    echo "Символ в верхнем регистре.";
} elseif (ctype_lower($char)) {
    echo "Символ в нижнем регистре.";
} else {
    echo "Символ не является буквой.";
}
?>
