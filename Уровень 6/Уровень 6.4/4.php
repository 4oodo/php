<?php
$arr = [
    ['name' => 'user1', 'age' => 30, 'salary' => 500],
    ['name' => 'user2', 'age' => 31, 'salary' => 600],
    ['name' => 'user3', 'age' => 32, 'salary' => 700],
];
?>

<table>
    <tbody>
    <?php
    foreach ($arr as $index => $user) {
        echo "<tr>";
        echo "<td>" . ($index + 1) . "</td>";
        echo "<td>" . htmlspecialchars($user['name']) . "</td>";
        echo "<td>" . htmlspecialchars($user['age']) . "</td>";
        echo "<td>" . htmlspecialchars($user['salary']) . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>