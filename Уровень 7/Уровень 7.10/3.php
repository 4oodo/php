<?php
function getAllFilePaths($dir, &$filePaths = []) {
    if (!is_dir($dir)) {
        throw new UnexpectedValueException("Директория не найдена: $dir");
    }

    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)) as $file) {
        $filePaths[] = $file->getPathname();
    }

    return $filePaths;
}

function writeFilePathsToFile($filePaths, $outputFile) {
    file_put_contents($outputFile, implode(PHP_EOL, $filePaths));
}

try {
    $directoryPath = 'C:/path/to/your/directory';
    $outputFilePath = 'C:/path/to/your/output.txt';
    $filePaths = getAllFilePaths($directoryPath);
    writeFilePathsToFile($filePaths, $outputFilePath);
    echo 'Пути записаны в ' . $outputFilePath;
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}
?>