<?php
$file = 'path/to/your/file.txt';
$directory = dirname($file);

if (!is_dir($directory)) {
    mkdir($directory, 0777, true);
}

$currentDateTime = date('Y-m-d H:i:s');
$fileHandle = fopen($file, 'a');

if ($fileHandle) {
    fwrite($fileHandle, PHP_EOL . $currentDateTime);
    fclose($fileHandle);
    echo "Текущая дата и время были добавлены в конец файла.";
} else {
    echo "Не удалось открыть файл.";
}
?>