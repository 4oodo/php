<?php
function getRandomWordStartingWith($words, $letter) {
    $filteredWords = array_filter($words, function($word) use ($letter) {
        return stripos($word, $letter) === 0;
    });

    if (empty($filteredWords)) {
        return null;
    }

    $randomIndex = array_rand($filteredWords);
    return $filteredWords[$randomIndex];
}

$words = ['apple', 'banana', 'apricot', 'cherry', 'avocado'];
$letter = 'a';
$randomWord = getRandomWordStartingWith($words, $letter);

if ($randomWord !== null) {
    echo "Случайное слово, начинающееся на '$letter': $randomWord";
} else {
    echo "Слов, начинающихся на '$letter', не найдено.";
}
?>