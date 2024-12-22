<?php
$events = [
    [
        'date' => '2019-12',
        'event' => 'name1'
    ],
    [
        'date' => '2019-12',
        'event' => 'name2'
    ],
    [
        'date' => '2019-11',
        'event' => 'name3'
    ],
    [
        'date' => '2019-11',
        'event' => 'name4'
    ],
    [
        'date' => '2020-10',
        'event' => 'name5'
    ],
    [
        'date' => '2020-10',
        'event' => 'name6'
    ],
    [
        'date' => '2020-11',
        'event' => 'name5'
    ],
    [
        'date' => '2020-11',
        'event' => 'name6'
    ],
    [
        'date' => '2020-12',
        'event' => 'name7'
    ],
    [
        'date' => '2020-12',
        'event' => 'name8'
    ],
    [
        'date' => '2020-12',
        'event' => 'name9'
    ],
];

$newEvents = [];

foreach ($events as $event) {
    list($year, $month) = explode('-', $event['date']);
    $newEvents[$year][$month][] = $event['event'];
}

print_r($newEvents);
?>