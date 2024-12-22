<?php
$inputFilePath = 'C:/Users/danya/PhpstormProjects/untitled/Уровень 7/Уровень 7.8/yourfile.txt';
$outputFilePath = 'C:/Users/danya/PhpstormProjects/untitled/Уровень 7/Уровень 7.8/unique_words.txt';

if (!file_exists($inputFilePath)) {
    die("Входной файл не найден: $inputFilePath");
}

$content = file_get_contents($inputFilePath);

$words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);

$uniqueWords = array_unique($words);

$outputFile = fopen($outputFilePath, 'w');
if (!$outputFile) {
    die("Не удалось открыть выходной файл: $outputFilePath");
}

$line = [];
foreach ($uniqueWords as $word) {
    $line[] = $word;
    if (count($line) == 10) {
        fwrite($outputFile, implode(' ', $line) . PHP_EOL);
        $line = [];
    }
}

if (!empty($line)) {
    fwrite($outputFile, implode(' ', $line) . PHP_EOL);
}

fclose($outputFile);

echo "Уникальные слова были записаны в выходной файл.";
?>