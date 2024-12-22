<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>10x10 Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 10; $col++) {
                echo "<td>Row $row, Col $col</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>