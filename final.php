<?php
$directory = 'C:\Users\danya\PhpstormProjects\untitled';

function countPhpFiles($dir) {
    $phpFileCount = 0;
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($files as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $phpFileCount++;
        }
    }
    return $phpFileCount;
}

echo "Number of .php files: " . countPhpFiles($directory);
?>