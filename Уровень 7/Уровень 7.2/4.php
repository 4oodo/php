<?php
$inputFile = 'path/to/your/input_file.txt';

if (file_exists($inputFile)) {
    $lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    print_r($lines);
} else {
    echo "Исходный файл не существует.";
}
?>