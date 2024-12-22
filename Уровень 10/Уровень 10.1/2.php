<?php
$text = 'aaa bbb, ccc. Xxx - eee bbb, kkk!';

preg_match_all('/\b\w+\b/', $text, $matches);

$words = $matches[0];

print_r($words);
?>