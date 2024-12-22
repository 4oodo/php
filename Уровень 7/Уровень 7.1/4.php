<?php
$inputFile = 'path/to/your/input_file.txt';
$outputFile = 'path/to/your/output_file.txt';

if (file_exists($inputFile)) {
    $content = file_get_contents($inputFile);
    $pattern = '/\b\d+\/\d+\b/';
    $replacement = '<span>$0</span>';
    $newContent = preg_replace($pattern, $replacement, $content);

    if (file_put_contents($outputFile, $newContent) !== false) {
        echo "Дроби успешно обернуты в теги span и сохранены в новый файл.";
    } else {
        echo "Ошибка при записи в новый файл.";
    }
} else {
    echo "Исходный файл не существует.";
}
?>