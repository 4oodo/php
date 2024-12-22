<?php
$text = "Это первое предложение. Вот второе! А это третье?";
$sentences = preg_split('/(?<=[.?!])\s+(?=[А-Яа-я])/u', $text);

print_r($sentences);
?>