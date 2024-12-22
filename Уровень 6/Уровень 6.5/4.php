<?php
$arr = [
    'text1',
    'text2',
    'text3',
];

$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
?>

<ul>
    <?php
    foreach ($arr as $index => $text) {
        $page = $index + 1;
        $class = ($page == $current_page) ? ' class="active"' : '';
        echo "<li><a href=\"index.php?page=$page\"$class>" . htmlspecialchars($text) . "</a></li>";
    }
    ?>
</ul>