<?php
$filePath = 'C:/Users/danya/PhpstormProjects/untitled/Уровень 9/Уровень 9.3/file.html';

if (file_exists($filePath)) {
    $content = file_get_contents($filePath);

    $pattern = '/(http[s]?:\/\/[^\s]+)/';
    $replacement = '<a href="$1">$1</a>';
    $modifiedContent = preg_replace($pattern, $replacement, $content);

    echo $modifiedContent;
} else {
    echo "Файл не найден: $filePath";
}
?>