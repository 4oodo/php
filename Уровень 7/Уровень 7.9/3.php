<?php
function countFilesInDirectory($directory) {
    if (!is_dir($directory)) {
        throw new UnexpectedValueException("Directory not found: $directory");
    }

    $fileCount = 0;
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS));

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $fileCount++;
        }
    }

    return $fileCount;
}

try {
    $directoryPath = 'C:/path/to/your/directory';
    echo "Количество файлов: " . countFilesInDirectory($directoryPath);
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}
?>