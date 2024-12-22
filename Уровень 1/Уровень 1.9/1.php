<?php

$array = ["http://example.com", "https://example.com", "http://test.com", "ftp://example.com"];
$filteredArray = array_filter($array, fn($x) => strpos($x, "http://") === 0);

print_r($filteredArray);
?>
