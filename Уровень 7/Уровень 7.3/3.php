<?php
$array = ['element1', 'element2', 'element3']; // Замените на ваш массив
$outputFile = 'path/to/your/output_file.txt';

$fileHandle = fopen($outputFile, 'w');

if ($fileHandle) {
    foreach ($array as $element) {
        fwrite($fileHandle, $element . PHP_EOL);
    }
    fclose($fileHandle);
    echo "Элементы массива были записаны в файл.";
} else {
    echo "Не удалось открыть файл.";
}
?>