<?php

function convertSeconds($seconds) {
    $days = floor($seconds / 86400);
    $seconds %= 86400;
    $hours = floor($seconds / 3600);
    $seconds %= 3600;
    $minutes = floor($seconds / 60);
    $seconds %= 60;

    return [
        'd' => $days,
        'h' => $hours,
        'm' => $minutes,
        's' => $seconds,
    ];
}

// Example usage
$seconds = 1234567;
$result = convertSeconds($seconds);
print_r($result);
?>