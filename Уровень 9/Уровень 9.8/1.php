<?php
$url = $_SERVER['REQUEST_URI'];

preg_match('/^\/(ru|en)\//', $url, $matches);
$lang = $matches[1] ?? 'en';

$arr = [
    'ru' => 'текст',
    'en' => 'text',
];

echo $arr[$lang];
?>