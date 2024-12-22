<?php
$directory = 'path/to/your/folder';
$imageFiles = [];

if (is_dir($directory)) {
    $files = scandir($directory);
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];

    foreach ($files as $file) {
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array(strtolower($fileExtension), $imageExtensions)) {
            $imageFiles[] = $file;
        }
    }

    echo "Файлы изображений: " . implode(", ", $imageFiles);
} else {
    echo "Указанная директория не существует.";
}
?>