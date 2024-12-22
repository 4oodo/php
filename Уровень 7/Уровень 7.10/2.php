<?php
function getDirectorySize($dir) {
    if (!is_dir($dir)) {
        throw new UnexpectedValueException("Директория не найдена: $dir");
    }

    $size = 0;

    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)) as $file) {
        $size += $file->getSize();
    }

    return $size;
}

try {
    $directoryPath = 'C:/path/to/your/directory';
    echo 'Размер папки: ' . getDirectorySize($directoryPath) . ' байт';
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}
?>