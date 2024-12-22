<?php
function getValueByKeys($array, $keys) {
    $keysArray = explode('.', $keys);
    foreach ($keysArray as $key) {
        if (isset($array[$key])) {
            $array = $array[$key];
        } else {
            return null;
        }
    }
    return $array;
}

$array = [
    'a' => [
        'b' => [
            'c' => '+++'
        ]
    ],
];

$result = getValueByKeys($array, 'a.b.c');
echo $result; // Output: +++
?>