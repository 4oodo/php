<?php
$inputFile = 'path/to/your/input_file.txt';

if (file_exists($inputFile)) {
    $content = file_get_contents($inputFile);
    $lettersOnly = preg_replace('/[^a-zA-Zа-яА-Я]/u', '', $content);
    $letterCount = mb_strlen($lettersOnly);

    echo "Количество букв в файле: " . $letterCount;
} else {
    echo "Исходный файл не существует.";
}
?>