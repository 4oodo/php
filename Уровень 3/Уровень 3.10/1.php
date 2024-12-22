<?php

$array = [1, 2, 3, 4, 5];
$result = [];

foreach ($array as $element) {
    $result[] = $element;
    $result[] = $element;
}

print_r($result);
?>