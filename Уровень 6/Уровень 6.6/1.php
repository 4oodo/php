<?php
$arr = [
    'element1',
    'element2',
    'element3',
];

$index = isset($_GET['number']) ? intval($_GET['number']) - 1 : -1;

if ($index >= 0 && $index < count($arr)) {
    echo "<p>" . htmlspecialchars($arr[$index]) . "</p>";
} else {
    echo "<p>Invalid number</p>";
}
?>