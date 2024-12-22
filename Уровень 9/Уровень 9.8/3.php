<?php
$jsonData = file_get_contents('tsconfig.json');

$data = json_decode($jsonData, true);

echo '<select>';

foreach ($data as $item) {
    echo '<option value="' . htmlspecialchars($item['id']) . '">' . htmlspecialchars($item['country']) . '</option>';
}

echo '</select>';
?>