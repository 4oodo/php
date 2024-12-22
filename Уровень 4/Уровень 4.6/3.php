<?php

function getInitials($input) {
    $words = explode(' ', $input);
    $initials = '';

    foreach ($words as $word) {
        if (!empty($word)) {
            $initials .= strtoupper($word[0]);
        }
    }

    return $initials;
}


$input = 'hello world example';
$result = getInitials($input);
echo $result;
?>