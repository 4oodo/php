<?php

$string = "12304560789";
$position = strpos($string, '0');

if ($position !== false) {
    echo "Позиция первого нуля: " . $position;
} else {
    echo "В строке нет нуля.";
}
?>