<?php
$inputFilePath = 'path/to/your/input/file.txt';
$outputFilePath = 'path/to/your/output/file.txt';

if (!file_exists($inputFilePath)) {
    die("Входной файл не существует.");
}

$inputContent = file_get_contents($inputFilePath);

$charCount = array_count_values(str_split($inputContent));
$totalChars = array_sum($charCount);

foreach ($charCount as $char => $count) {
    $charPercentage[$char] = ($count / $totalChars) * 100;
}

$outputContent = "Процентное содержание символов:\n";
foreach ($charPercentage as $char => $percentage) {
    $outputContent .= "'$char': " . number_format($percentage, 2) . "%\n";
}

$outputDir = dirname($outputFilePath);
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
}

file_put_contents($outputFilePath, $outputContent);

echo "Процентное содержание символов было вычислено и записано в новый файл.";
?>