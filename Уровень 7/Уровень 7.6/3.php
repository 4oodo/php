<?php
$inputFilePath = 'path/to/your/input/file.txt';


if (!file_exists($inputFilePath)) {
    die("Входной файл не существует.");
}

$inputContent = file($inputFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

shuffle($inputContent);

file_put_contents($inputFilePath, implode(PHP_EOL, $inputContent));

echo "Строки были перемешаны и записаны обратно в файл.";
?>