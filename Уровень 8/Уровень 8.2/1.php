<?php
function getPageName($url) {
    $parsedUrl = parse_url($url);
    return basename($parsedUrl['path']);
}

$url = 'http://test.com/dir1/dir2/dir3/page.html';
echo getPageName($url);
?>