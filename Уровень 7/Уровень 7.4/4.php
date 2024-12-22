<?php
$directory = 'path/to/your/folder';
$outputFile = 'path/to/your/output.txt';
$linesToRead = 5; // Количество строк для чтения из каждого файла

if (is_dir($directory)) {
    $files = scandir($directory);
    $textFiles = array_filter($files, function($file) use ($directory) {
        return is_file($directory . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'txt';
    });

    $outputHandle = fopen($outputFile, 'w');
    if ($outputHandle) {
        foreach ($textFiles as $file) {
            $filePath = $directory . '/' . $file;
            $fileHandle = fopen($filePath, 'r');
            if ($fileHandle) {
                $lineCount = 0;
                while (($line = fgets($fileHandle)) !== false && $lineCount < $linesToRead) {
                    fwrite($outputHandle, $line);
                    $lineCount++;
                }
                fclose($fileHandle);
                fwrite($outputHandle, PHP_EOL . PHP_EOL); // Добавить пустые строки между текстами
            }
        }
        fclose($outputHandle);
        echo "Первые $linesToRead строк из каждого текстового файла были записаны в $outputFile.";
    } else {
        echo "Не удалось открыть выходной файл.";
    }
} else {
    echo "Указанная директория не существует.";
}
?>