<?php
function getDomainName($url) {
    $parsedUrl = parse_url($url);
    return $parsedUrl['host'];
}

$url = 'http://test.com/dir1/dir2/dir3/page.html';
echo getDomainName($url);
?>