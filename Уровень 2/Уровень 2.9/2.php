<?php

$array = [1, 2, 3, 4, 5];
$reversedArray = array_reverse($array);

foreach ($reversedArray as $element) {
    echo $element . PHP_EOL;
}
?>