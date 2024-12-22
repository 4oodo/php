<?php
$arr = [
    [
        'header' => 'head1',
        'text' => '111 111 111',
        'href' => '/page/111/',
    ],
    [
        'header' => 'head2',
        'text' => '222 222 222',
        'href' => '/page/222/',
    ],
    [
        'header' => 'head3',
        'text' => '333 333 333',
        'href' => '/page/333/',
    ],
];

foreach ($arr as $item) {
    echo '<div class="block">';
    echo '<h2>' . htmlspecialchars($item['header']) . '</h2>';
    echo '<p>' . htmlspecialchars($item['text']) . '</p>';
    echo '<a href="' . htmlspecialchars($item['href']) . '">more...</a>';
    echo '</div>';
}
?>