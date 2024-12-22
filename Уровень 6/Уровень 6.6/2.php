<?php
function getCharacterPercentages($text) {
    $length = mb_strlen($text);
    $charCounts = array_count_values(mb_str_split($text));
    $percentages = [];

    foreach ($charCounts as $char => $count) {
        $percentages[$char] = ($count / $length) * 100;
    }

    return $percentages;
}

$text = "ваш текст здесь";
$percentages = getCharacterPercentages($text);

print_r($percentages);
?>