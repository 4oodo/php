<?php
function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        throw new UnexpectedValueException("Директория не найдена: $dir");
    }

    $items = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($items as $item) {
        if ($item->isDir()) {
            rmdir($item->getRealPath());
        } else {
            unlink($item->getRealPath());
        }
    }

    rmdir($dir);
}

try {
    $directoryPath = 'C:/path/to/your/directory';
    deleteDirectory($directoryPath);
    echo 'Директория удалена: ' . $directoryPath;
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}
?>