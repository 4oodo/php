<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$numColumns = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
            $rowCount = 0;
            foreach ($arr as $index => $value) {
                echo "<td>$value</td>";
                $rowCount++;
                if ($rowCount % $numColumns == 0) {
                    echo "</tr><tr>";
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>