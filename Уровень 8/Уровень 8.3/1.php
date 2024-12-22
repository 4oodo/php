<?php
function getProtocol($url) {
    $parsedUrl = parse_url($url);
    return $parsedUrl['scheme'];
}

$url = 'http://test.com/dir1/dir2/dir3/page.html';
echo getProtocol($url);
?>