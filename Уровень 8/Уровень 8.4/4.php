<?php
$data = [
    [
        'country' => 'country1',
        'city' => 'city11',
    ],
    [
        'country' => 'country2',
        'city' => 'city21',
    ],
    [
        'country' => 'country3',
        'city' => 'city31',
    ],
    [
        'country' => 'country1',
        'city' => 'city12',
    ],
    [
        'country' => 'country1',
        'city' => 'city13',
    ],
    [
        'country' => 'country2',
        'city' => 'city22',
    ],
    [
        'country' => 'country3',
        'city' => 'city31',
    ],
    [
        'country' => 'country3',
        'city' => 'city32',
    ],
];

$result = [];

foreach ($data as $entry) {
    $country = $entry['country'];
    $city = $entry['city'];
    if (!isset($result[$country])) {
        $result[$country] = [];
    }
    if (!in_array($city, $result[$country])) {
        $result[$country][] = $city;
    }
}

print_r($result);
?>