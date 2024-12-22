<?php

function sumNumbers(...$numbers) {
    return array_sum($numbers);
}

// Example usage
echo sumNumbers(1, 2, 3, 4, 5);
echo sumNumbers(10, 20, 30);
?><?php
