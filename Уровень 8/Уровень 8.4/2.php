<?php
function getDirectories($url) {
    $parsedUrl = parse_url($url);
    $path = trim($parsedUrl['path'], '/');
    $directories = explode('/', $path);
    array_pop($directories);
    return $directories;
}

$url = 'http://test.com/dir1/dir2/dir3/page.html';
print_r(getDirectories($url));
?>