<?php
$folderPath = 'path/to/your/folder';
$fileExtension = 'txt'; // Измените это на нужное расширение файла

$files = glob($folderPath . '/*.' . $fileExtension);

foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
    }
}

echo "Все файлы с расширением .$fileExtension были удалены из папки.";
?>