<?php
$inputFile = 'path/to/your/input_file.txt';

if (file_exists($inputFile)) {
    $content = file_get_contents($inputFile);
    $numbers = array_map('trim', explode(',', $content));
    $maxNumber = max($numbers);

    echo "Максимальное число: " . $maxNumber;
} else {
    echo "Исходный файл не существует.";
}
?>