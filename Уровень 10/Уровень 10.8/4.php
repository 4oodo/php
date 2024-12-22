<?php

$citiesJson = file_get_contents('1.json');
$countriesJson = file_get_contents('1.json');

$cities = json_decode($citiesJson, true);
$countries = json_decode($countriesJson, true);

$countryMap = [];
foreach ($countries as $country) {
    $countryMap[$country['country']] = $country['id'];
}

foreach ($cities as &$city) {
    if (isset($countryMap[$city['country']])) {
        $city['country_id'] = $countryMap[$city['country']];
        unset($city['country']);
    }
}

$modifiedCitiesJson = json_encode($cities, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo $modifiedCitiesJson;
?>