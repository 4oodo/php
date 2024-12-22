<?php

$array = ["index.html", "about.php", "contact.html", "home.jsp"];
$filteredArray = array_filter($array, fn($x) => substr($x, -5) === ".html");

print_r($filteredArray);
?>