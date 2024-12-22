<?php
$data = [
    [
        'year' =>  2019,
        'month' => 11,
        'day' => 20,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2019,
        'month' => 11,
        'day' => 21,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2019,
        'month' => 12,
        'day' => 25,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2019,
        'month' => 12,
        'day' => 26,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2020,
        'month' => 10,
        'day' => 29,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2020,
        'month' => 10,
        'day' => 30,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2020,
        'month' => 11,
        'day' => 19,
        'data' => ['массив с данными']
    ],
    [
        'year' =>  2020,
        'month' => 11,
        'day' => 20,
        'data' => ['массив с данными']
    ],
];

$newData = [];

foreach ($data as $entry) {
    $year = $entry['year'];
    $month = $entry['month'];
    $day = $entry['day'];
    $newData[$year][$month][$day] = $entry['data'];
}

print_r($newData);
?>