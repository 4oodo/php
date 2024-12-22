<?php
function shuffleWordsInSentences($inputFilePath, $outputFilePath) {
    if (!file_exists($inputFilePath)) {
        die("Входной файл не найден: $inputFilePath");
    }

    $content = file_get_contents($inputFilePath);
    $sentences = preg_split('/(?<=[.!?])\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);
    $shuffledSentences = [];

    foreach ($sentences as $sentence) {
        $words = preg_split('/\s+/', trim($sentence));
        shuffle($words);
        $shuffledSentences[] = implode(' ', $words);
    }

    $shuffledContent = implode(' ', $shuffledSentences);
    file_put_contents($outputFilePath, $shuffledContent);
}

$inputFilePath = 'C:/path/to/your/inputfile.txt';
$outputFilePath = 'C:/path/to/your/outputfile.txt';
shuffleWordsInSentences($inputFilePath, $outputFilePath);
echo "Слова перемешаны и записаны в выходной файл успешно.";
?>