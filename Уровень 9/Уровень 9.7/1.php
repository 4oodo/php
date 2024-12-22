<?php
// Path to the database file
$dbPath = __DIR__ . '/predictions.db';

try {
    $pdo = new PDO("sqlite:$dbPath");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}

$currentDate = date('Y-m-d');

session_start();

if (!isset($_SESSION['prediction_date']) || $_SESSION['prediction_date'] !== $currentDate) {
    $query = "SELECT text FROM predictions ORDER BY RANDOM() LIMIT 1";
    $stmt = $pdo->query($query);
    $prediction = $stmt->fetchColumn();

    $_SESSION['prediction'] = $prediction;
    $_SESSION['prediction_date'] = $currentDate;
} else {
    $prediction = $_SESSION['prediction'];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Prediction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .prediction {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Your Prediction for Today</h1>
<div class="prediction"><?= htmlspecialchars($prediction) ?></div>
</body>
</html>