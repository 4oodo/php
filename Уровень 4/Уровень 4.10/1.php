<?php
function checkLetterLanguage($letter) {
    if (preg_match('/^[a-zA-Z]$/', $letter)) {
        return "латиница";
    }

    if (preg_match('/^[а-яА-ЯёЁ]$/u', $letter)) {
        return "кириллица";
    }

    return "Не является буквой";
}

// Пример использования
echo checkLetterLanguage('a');
echo "\n";
echo checkLetterLanguage('Я');
echo "\n";
echo checkLetterLanguage('1');
?>
