<?php
function moveImagesToDirectory($sourceDirectory, $destinationDirectory) {
    if (!is_dir($sourceDirectory)) {
        throw new UnexpectedValueException("Исходная папка не найдена: $sourceDirectory");
    }

    if (!is_dir($destinationDirectory)) {
        if (!mkdir($destinationDirectory, 0777, true)) {
            throw new RuntimeException("Не удалось создать целевую папку: $destinationDirectory");
        }
    }

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sourceDirectory, RecursiveDirectoryIterator::SKIP_DOTS));
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

    foreach ($iterator as $file) {
        if ($file->isFile() && in_array(strtolower($file->getExtension()), $imageExtensions)) {
            $uniqueName = uniqid() . '.' . $file->getExtension();
            $destinationPath = $destinationDirectory . DIRECTORY_SEPARATOR . $uniqueName;

            if (!rename($file->getPathname(), $destinationPath)) {
                echo "Не удалось переместить файл: " . $file->getPathname() . "\n";
            }
        }
    }
}

try {
    $sourceDirectory = 'C:/path/to/source/directory';
    $destinationDirectory = 'C:/path/to/destination/directory';
    moveImagesToDirectory($sourceDirectory, $destinationDirectory);
    echo "Изображения успешно перемещены.";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>