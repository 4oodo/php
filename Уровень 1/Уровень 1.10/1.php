<?php

$array = array_map(fn() => rand(1, 100), range(1, 10));

print_r($array);
?>
