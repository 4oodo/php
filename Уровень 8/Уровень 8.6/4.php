<?php
$events = [
    ['date' => '2019-12-29', 'event' => 'name1'],
    ['date' => '2019-12-31', 'event' => 'name2'],
    ['date' => '2019-12-29', 'event' => 'name3'],
    ['date' => '2019-12-30', 'event' => 'name4'],
    ['date' => '2019-12-29', 'event' => 'name5'],
    ['date' => '2019-12-31', 'event' => 'name6'],
    ['date' => '2019-12-29', 'event' => 'name7'],
    ['date' => '2019-12-30', 'event' => 'name8'],
    ['date' => '2019-12-30', 'event' => 'name9'],
];

$groupedEvents = [];

foreach ($events as $event) {
    $date = $event['date'];
    $eventName = $event['event'];
    if (!isset($groupedEvents[$date])) {
        $groupedEvents[$date] = [];
    }
    $groupedEvents[$date][] = $eventName;
}

print_r($groupedEvents);
?>