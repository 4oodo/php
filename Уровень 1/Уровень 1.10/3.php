<?php

$array = [1, 2, 3, 4, 5, 6];
for ($i = 0; $i < count($array); $i += 2) {
    $subArray = array_slice($array, $i, 2);
    print_r($subArray);
}
?>
