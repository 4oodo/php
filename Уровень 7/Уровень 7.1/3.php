<?php
$inputFile = 'path/to/your/input_file.txt';
$outputFile = 'path/to/your/output_file.txt';

if (file_exists($inputFile)) {
    $content = file_get_contents($inputFile);
    $words = preg_split('/\s+/', $content);
    $wrappedWords = array_map(function($word) {
        return "<span>{$word}</span>";
    }, $words);
    $newContent = implode(' ', $wrappedWords);

    if (file_put_contents($outputFile, $newContent) !== false) {
        echo "Слова успешно обернуты в теги span и сохранены в новый файл.";
    } else {
        echo "Ошибка при записи в новый файл.";
    }
} else {
    echo "Исходный файл не существует.";
}
?>