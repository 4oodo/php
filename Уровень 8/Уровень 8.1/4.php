<?php
function printPyramid($height) {
    for ($i = 1; $i <= $height; $i++) {
        echo str_repeat('x', $i) . "\n";
    }
}

printPyramid(5);
?>