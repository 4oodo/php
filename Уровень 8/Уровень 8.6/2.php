<?php
$url = 'http://test.com/dir1/dir2/dir3/page.html';
$parsedUrl = parse_url($url);
$path = $parsedUrl['path'];
$segments = explode('/', trim($path, '/'));
$firstDir = $segments[0];

echo $firstDir;
?>