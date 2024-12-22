<?php

$word = 'abcba';

if ($word === strrev($word)) {
    echo "Слово является палиндромом.";
} else {
    echo "Слово не является палиндромом.";
}
?>