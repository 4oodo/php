<?php
$rows = 8;
$cols = 8;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chessboard Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php for ($i = 0; $i < $rows; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $cols; $j++): ?>
                    <td class="<?php echo ($i + $j) % 2 == 0 ? 'white' : 'black'; ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>