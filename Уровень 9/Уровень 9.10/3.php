<?php
try {
    // Create a new SQLite database
    $pdo = new PDO('sqlite:database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT countries.name AS country, cities.name AS city 
                         FROM countries 
                         JOIN cities ON countries.id = cities.country_id");

    $result = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $country = $row['country'];
        $city = $row['city'];

        // Initialize the sub-array for the country if it doesn't exist
        if (!isset($result[$country])) {
            $result[$country] = [];
        }

        // Add the city to the country's array
        $result[$country][] = $city;
    }

    // Print the resulting array
    print_r($result);
} catch (PDOException $e) {
    // Handle connection errors
    echo 'Connection failed: ' . $e->getMessage();
}
?>