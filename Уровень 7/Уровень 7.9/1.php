<?php
$inputFilePath = 'C:/Users/danya/PhpstormProjects/untitled/Уровень 7/Уровень 7.8/yourfile.txt';

if (!file_exists($inputFilePath)) {
    die("Входной файл не найден: $inputFilePath");
}

$content = file($inputFilePath, FILE_IGNORE_NEW_LINES);

$emptyLineCount = 0;
foreach ($content as $line) {
    if (trim($line) === '') {
        $emptyLineCount++;
    }
}

echo "Количество пустых строк: $emptyLineCount";
?>