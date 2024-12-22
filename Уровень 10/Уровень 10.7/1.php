<?php
function getPossibleWords($inputWord) {
    $inputWord = strtolower($inputWord);
    $inputLetters = count_chars($inputWord, 1);
    $dictionaryPath = 'path/to/dictionary.txt';

    if (!file_exists($dictionaryPath)) {
        die("Файл словаря не найден.");
    }

    $dictionary = file($dictionaryPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($dictionary === false) {
        die("Не удалось открыть файл словаря.");
    }

    $possibleWords = [];

    foreach ($dictionary as $word) {
        $word = strtolower($word);
        $wordLetters = count_chars($word, 1);
        $isPossible = true;

        foreach ($wordLetters as $letter => $count) {
            if (!isset($inputLetters[$letter]) || $inputLetters[$letter] < $count) {
                $isPossible = false;
                break;
            }
        }

        if ($isPossible) {
            $possibleWords[] = $word;
        }
    }

    return $possibleWords;
}

// Пример использования
$inputWord = 'example';
$possibleWords = getPossibleWords($inputWord);
print_r($possibleWords);
?>