<?php
// Правильный путь к текстовому файлу
$filePath = 'C:/Users/danya/PhpstormProjects/untitled/Уровень 7/Уровень 7.8/yourfile.txt';

if (!file_exists($filePath)) {
    die("Файл не найден: $filePath");
}

$content = file_get_contents($filePath);

$words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);

shuffle($words);

$shuffledContent = implode(' ', $words);

file_put_contents($filePath, $shuffledContent);

echo "Слова в файле были перемешаны.";
?>