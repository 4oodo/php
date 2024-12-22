<?php
$arr = [
    'text1',
    'text2',
    'text3',
];
?>

<ul>
    <?php
    foreach ($arr as $index => $text) {
        echo "<li><a href=\"index.php?page=" . ($index + 1) . "\">" . htmlspecialchars($text) . "</a></li>";
    }
    ?>
</ul>