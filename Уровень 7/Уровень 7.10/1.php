<?php
function checkEmptyLines($filePath) {
    if (!file_exists($filePath)) {
        die("Файл не найден: $filePath");
    }

    $content = file($filePath, FILE_IGNORE_NEW_LINES);

    $startsWithEmptyLine = isset($content[0]) && trim($content[0]) === '';
    $endsWithTwoEmptyLines = count($content) >= 2 && trim($content[count($content) - 1]) === '' && trim($content[count($content) - 2]) === '';

    return $startsWithEmptyLine && $endsWithTwoEmptyLines;
}

$filePath = 'C:/path/to/your/file.txt';
if (checkEmptyLines($filePath)) {
    echo "Файл начинается с одной пустой строки и заканчивается двумя пустыми строками.";
} else {
    echo "Файл не соответствует требуемым условиям.";
}
?>