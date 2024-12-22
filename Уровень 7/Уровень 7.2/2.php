<?php
$date = date('Y-m-d');
$filename = $date . '.txt';
$file = fopen($filename, 'w');

if ($file) {
    fwrite($file, "Этот файл был создан " . $date);
    fclose($file);
    echo "Файл успешно создан: " . $filename;
} else {
    echo "Ошибка при создании файла.";
}
?>