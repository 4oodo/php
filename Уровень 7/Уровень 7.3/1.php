<?php
$inputFile = 'path/to/your/input_file.txt';

if (file_exists($inputFile)) {
    $content = file_get_contents($inputFile);

    $modifiedContent = preg_replace_callback('/\d+/', function ($matches) {
        return pow($matches[0], 2);
    }, $content);

    file_put_contents($inputFile, $modifiedContent);

    echo "Числа в файле были возведены в квадрат.";
} else {
    echo "Исходный файл не существует.";
}
?>

