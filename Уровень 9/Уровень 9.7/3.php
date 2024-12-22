<?php
$jsonData = file_get_contents('tsconfig.json');

$data = json_decode($jsonData, true);

echo '<table border="1">
        <tbody>';

$index = 1;


foreach ($data as $item) {
    echo "<tr>
            <td>" . $index++ . "</td>
            <td>" . htmlspecialchars($item['catg']) . "</td>
            <td>" . htmlspecialchars($item['name']) . "</td>
            <td>" . htmlspecialchars($item['cost']) . "</td>
          </tr>";
}

echo '  </tbody>
      </table>';
?>
