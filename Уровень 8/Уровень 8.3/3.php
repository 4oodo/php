<?php
function printPyramid($height) {
    for ($i = 1; $i <= $height; $i++) {
        echo str_repeat((string)$i, 3) . "\n";
    }
}

printPyramid(9);
?>