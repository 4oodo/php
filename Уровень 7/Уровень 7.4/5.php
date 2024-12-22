<?php
$directory = 'path/to/your/folder';

if (is_dir($directory)) {
    $files = scandir($directory);
    $textFiles = array_filter($files, function($file) use ($directory) {
        return is_file($directory . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'txt';
    });

    foreach ($textFiles as $file) {
        $filePath = $directory . '/' . $file;
        $fileHandle = fopen($filePath, 'w');
        if ($fileHandle) {
            fclose($fileHandle);
        } else {
            echo "Не удалось открыть файл $filePath для записи.";
        }
    }
    echo "Все текстовые файлы в директории были очищены.";
} else {
    echo "Указанная директория не существует.";
}
?>