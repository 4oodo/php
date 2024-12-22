<?php

$string = "яблоко апельсин банан виноград";
$words = explode(" ", $string);
sort($words);
$sortedString = implode(" ", $words);

echo $sortedString;
?>