<?php
// Create SQLite database and table
$db = new SQLite3('orders.db');
$result = $db->query('
    SELECT 
        strftime("%Y", date) AS year,
        strftime("%m", date) AS month,
        SUM(price * amount) AS total
    FROM orders
    GROUP BY year, month
    ORDER BY year, month
');

$ordersSummary = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $year = $row['year'];
    $month = $row['month'];
    $total = $row['total'];

    if (!isset($ordersSummary[$year])) {
        $ordersSummary[$year] = [];
    }
    $ordersSummary[$year][$month] = $total;
}

// Print the result
print_r($ordersSummary);
?>