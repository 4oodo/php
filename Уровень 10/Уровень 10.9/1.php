<?php
function formatText($text, $maxLineLength = 70) {
    $words = explode(' ', $text);
    $formattedText = '';
    $currentLine = '';

    foreach ($words as $word) {
        if (strlen($currentLine . ' ' . $word) <= $maxLineLength) {
            $currentLine .= ($currentLine === '' ? '' : ' ') . $word;
        } else {
            $formattedText .= $currentLine . "\n";
            $currentLine = $word;
        }
    }

    if ($currentLine !== '') {
        $formattedText .= $currentLine . "\n";
    }

    return $formattedText;
}


$text = "Ваш длинный текст здесь...";
echo formatText($text);
?>