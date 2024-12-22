<?php
$filePath = 'path/to/your/file.txt';
$currentDateTime = date('Y-m-d H:i:s');

$directory = dirname($filePath);
if (!is_dir($directory)) {
    mkdir($directory, 0777, true);
}

if (!file_exists($filePath)) {
    file_put_contents($filePath, '');
}

$fileContent = file_get_contents($filePath);

$newContent = $currentDateTime . PHP_EOL . $fileContent;

file_put_contents($filePath, $newContent);

echo "Текущая дата и время добавлены в начало файла.";
?>