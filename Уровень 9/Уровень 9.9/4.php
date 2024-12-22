<?php
try {
    // Create a new SQLite database
    $pdo = new PDO('sqlite:database.sqlite');

    $stmt = $pdo->query("SELECT strftime('%Y', register_date) AS year, strftime('%m', register_date) AS month, COUNT(*) AS count FROM users GROUP BY year, month");

    $registrations = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $year = $row['year'];
        $month = $row['month'];
        $count = $row['count'];

        // Initialize the sub-array for the year if it doesn't exist
        if (!isset($registrations[$year])) {
            $registrations[$year] = [];
        }

        // Fill the array with data
        $registrations[$year][$month] = $count;
    }

    // Print the resulting array
    print_r($registrations);
} catch (PDOException $e) {
    // Handle connection errors
    echo 'Connection failed: ' . $e->getMessage();
}
?>