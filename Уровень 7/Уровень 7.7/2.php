<?php
$directoryPath = 'path/to/your/directory';

function getAllFiles($dir) {
    if (!is_dir($dir)) {
        throw new UnexpectedValueException("Directory does not exist: $dir");
    }

    $files = [];
    $items = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($items as $item) {
        if ($item->isFile()) {
            $files[] = $item->getFilename();
        }
    }
    return $files;
}

try {
    $allFiles = getAllFiles($directoryPath);
    print_r($allFiles);
} catch (UnexpectedValueException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>