<?php
$file = 'path/to/your/file.txt';

if (file_exists($file)) {
    $fileSize = filesize($file);
    echo "Количество символов в файле: " . $fileSize;
} else {
    echo "Файл не существует.";
}
?>