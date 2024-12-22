<?php
$inputFilePath = 'C:/Users/danya/PhpstormProjects/untitled/Уровень 7/Уровень 7.8/yourfile.txt';

if (!file_exists($inputFilePath)) {
    die("Входной файл не найден: $inputFilePath");
}

$content = file_get_contents($inputFilePath);

$sentences = preg_split('/(?<=[.!?])\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);

foreach ($sentences as $sentence) {
    $firstWord = strtok($sentence, ' ');
    if ($firstWord !== '' && ctype_upper($firstWord[0])) {
        echo "Первое слово предложения начинается с большой буквы: $sentence\n";
    } else {
        echo "Первое слово предложения не начинается с большой буквы: $sentence\n";
    }
}
?>