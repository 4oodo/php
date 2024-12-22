<?php
$directoryPath = 'path/to/your/directory';

function getFileSizes($directoryPath) {
    $fileSizes = [];

    if (is_dir($directoryPath)) {
        $files = scandir($directoryPath);

        foreach ($files as $file) {
            $filePath = $directoryPath . DIRECTORY_SEPARATOR . $file;

            if (is_file($filePath)) {
                $fileSizes[$file] = filesize($filePath);
            }
        }
    }

    return $fileSizes;
}

$fileSizes = getFileSizes($directoryPath);
print_r($fileSizes);
?>