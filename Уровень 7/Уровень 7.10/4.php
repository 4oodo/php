<?php
function shuffleWordsInSentence($sentence) {
    $words = explode(' ', $sentence);
    shuffle($words);
    return implode(' ', $words);
}

function shuffleTextFile($inputFilePath, $outputFilePath) {
    if (!file_exists($inputFilePath)) {
        throw new UnexpectedValueException("Файл не найден: $inputFilePath");
    }

    $content = file_get_contents($inputFilePath);
    $sentences = preg_split('/(?<=[.!?])\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);

    $shuffledSentences = array_map('shuffleWordsInSentence', $sentences);
    $shuffledContent = implode(' ', $shuffledSentences);

    file_put_contents($outputFilePath, $shuffledContent);
}

try {
    $inputFilePath = 'C:/path/to/your/input.txt';
    $outputFilePath = 'C:/path/to/your/output.txt';
    shuffleTextFile($inputFilePath, $outputFilePath);
    echo 'Перемешанный текст записан в ' . $outputFilePath;
} catch (UnexpectedValueException $e) {
    echo $e->getMessage();
}
?>