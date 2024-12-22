<?php
$data = [
    [
        'text' => '111',
        'href' => '1.html',
    ],
    [
        'text' => '222',
        'href' => '2.html',
    ],
    [
        'text' => '333',
        'href' => '3.html',
    ],
];

foreach ($data as $item) {
    echo '<a href="' . htmlspecialchars($item['href']) . '">' . htmlspecialchars($item['text']) . '</a>' . PHP_EOL;
}
?>