<?php

$array = [1, -2, 3, -4, 5, -6];
$positiveArray = array_filter($array, fn($element) => $element > 0);

print_r($positiveArray);
?><?php
