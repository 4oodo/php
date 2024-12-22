<?php
function generateTable() {
    $rows = 5;
    $cols = 5;
    $table = '<table border="1">';

    for ($i = $rows; $i >= 1; $i--) {
        $table .= '<tr>';
        for ($j = $i; $j < $i + $cols; $j++) {
            $table .= '<td>' . $j . '</td>';
        }
        $table .= '</tr>';
    }

    $table .= '</table>';
    return $table;
}

echo generateTable();
?>