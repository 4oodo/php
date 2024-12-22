<?php

function getRandomColor() {
    $randomColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    return $randomColor;
}

// Example usage
echo getRandomColor();
?>