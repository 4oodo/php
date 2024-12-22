<?php
$url = 'http://test.com/dir1/dir2/dir3/page.html';

$path = parse_url($url, PHP_URL_PATH);

$segments = explode('/', trim($path, '/'));

$folders = [];
for ($i = 0; $i < count($segments) - 1; $i++) {
    $folders[] = '/' . implode('/', array_slice($segments, $i, count($segments) - $i - 1)) . '/';
}

// Print the result
print_r($folders);
?>