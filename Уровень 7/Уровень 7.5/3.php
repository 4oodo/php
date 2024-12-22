<?php
$parentDirectory = 'path/to/your/parent/directory';
$subdirectories = ['subdir1', 'subdir2', 'subdir3']; // Массив имён подпапок

function createSubdirectories($parentDirectory, $subdirectories) {
    if (!is_dir($parentDirectory)) {
        mkdir($parentDirectory, 0777, true);
    }

    foreach ($subdirectories as $subdir) {
        $subdirPath = $parentDirectory . DIRECTORY_SEPARATOR . $subdir;
        if (!is_dir($subdirPath)) {
            mkdir($subdirPath, 0777, true);
        }
    }
}

createSubdirectories($parentDirectory, $subdirectories);
echo "Подпапки успешно созданы.";
?>