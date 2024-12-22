<?php
$directoryPath = 'path/to/your/directory';

function getSubfolders($dir) {
    $subfolders = [];
    if (is_dir($dir)) {
        $items = scandir($dir);
        foreach ($items as $item) {
            if ($item != '.' && $item != '..' && is_dir($dir . DIRECTORY_SEPARATOR . $item)) {
                $subfolders[] = $item;
            }
        }
    }
    return $subfolders;
}

$subfolders = getSubfolders($directoryPath);
print_r($subfolders);
?>