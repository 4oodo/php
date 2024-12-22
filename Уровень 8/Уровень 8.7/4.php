<?php
$events = [
    '2019-12-29' => ['name1', 'name3', 'name5', 'name7'],
    '2019-12-30' => ['name4', 'name8', 'name9'],
    '2019-12-31' => ['name2', 'name6'],
];

$newEvents = [];

foreach ($events as $date => $eventNames) {
    foreach ($eventNames as $eventName) {
        $newEvents[] = [
            'date' => $date,
            'event' => $eventName,
        ];
    }
}

print_r($newEvents);
?>