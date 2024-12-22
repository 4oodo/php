<?php
$directory = 'path/to/your/folder';
$fileNames = ['file1.txt', 'file2.txt', 'file3.txt']; // Массив с именами файлов

if (is_dir($directory)) {
    foreach ($fileNames as $fileName) {
        $filePath = $directory . '/' . $fileName;
        $fileHandle = fopen($filePath, 'w');
        if ($fileHandle) {
            fclose($fileHandle);
            echo "Файл $fileName успешно создан.<br>";
        } else {
            echo "Не удалось создать файл $fileName.<br>";
        }
    }
} else {
    echo "Указанная директория не существует.";
}
?>