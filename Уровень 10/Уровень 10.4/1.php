<?php
function shuffleWords($text) {
    $words = preg_split('/\s+/', $text);

    shuffle($words);

    return implode(' ', $words);
}

$text = "Это пример текста с несколькими словами.";
$shuffledText = shuffleWords($text);
echo $shuffledText;
?>