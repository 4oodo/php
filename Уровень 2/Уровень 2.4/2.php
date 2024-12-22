<?php

$object = (object) [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
];

$keys = array_keys(get_object_vars($object));
$values = array_values(get_object_vars($object));

print_r($keys);
print_r($values);
?>
