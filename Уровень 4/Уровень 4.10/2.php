<?php

function shuffleArray($array) {
    if (!is_array($array)) {
        return [];
    }

    shuffle($array);
    return $array;
}

// Example usage
$inputArray = [1, 2, 3, 4, 5];
print_r(shuffleArray($inputArray));
?>