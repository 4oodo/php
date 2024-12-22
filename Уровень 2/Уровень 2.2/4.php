<?php

$string = "1020304050";
$position = strpos($string, '0');

if ($position !== false) {
    echo "Позиция первого нуля в строке: " . $position;
} else {
    echo "В строке нет нуля.";
}
?>
