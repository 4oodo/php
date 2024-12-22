<?php

$string = "100200300400";
$zeroCount = 0;
$position = -1;

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === '0') {
        $zeroCount++;
        if ($zeroCount === 3) {
            $position = $i;
            break;
        }
    }
}

if ($position !== -1) {
    echo "Позиция третьего нуля: " . $position;
} else {
    echo "В строке нет третьего нуля.";
}
?>
