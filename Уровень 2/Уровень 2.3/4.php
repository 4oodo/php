<?php

$date = '2025-12-31';
$dateParts = explode('-', $date);

$dateArray = [
    'year'  => $dateParts[0],
    'month' => $dateParts[1],
    'day'   => $dateParts[2],
];

print_r($dateArray);
?>