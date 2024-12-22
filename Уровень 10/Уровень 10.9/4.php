<?php
$twoDimArray = [
    [11, 12, 13],
    [21, 22, 23],
    [31, 32, 33],
];

$oneDimArray = [14, 24, 34];

foreach ($twoDimArray as $index => &$row) {
    $row[] = $oneDimArray[$index];
}

print_r($twoDimArray);
?>