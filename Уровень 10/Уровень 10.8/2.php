<?php
function permute($items, $perms = []) {
    if (empty($items)) {
        echo implode(' ', $perms) . "\n";
    } else {
        for ($i = 0; $i < count($items); $i++) {
            $newItems = $items;
            $newPerms = $perms;
            list($foo) = array_splice($newItems, $i, 1);
            array_unshift($newPerms, $foo);
            permute($newItems, $newPerms);
        }
    }
}

// Example usage
$array = [1, 2, 3];
permute($array);
?>