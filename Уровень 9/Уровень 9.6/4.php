<?php
$url = 'http://test.com/dir1/dir2/dir3/page.html';
$num = 2;
$val = 'eee';

$parsedUrl = parse_url($url);
$path = $parsedUrl['path'];

// Split the path into segments
$segments = explode('/', trim($path, '/'));

if (isset($segments[$num])) {
    $segments[$num] = $val;
}

$newPath = implode('/', $segments);
$newUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . '/' . $newPath;

echo $newUrl;
?>