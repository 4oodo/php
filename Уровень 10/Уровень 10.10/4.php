<?php
// Create or open the SQLite database
$db = new PDO('sqlite:family_tree.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE IF NOT EXISTS relatives (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    relation TEXT NOT NULL,
    parent_id INTEGER,
    FOREIGN KEY (parent_id) REFERENCES relatives(id)
)");

// Handle form submission to add a relative
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $parent_id = $_POST['parent_id'] ?? null;

    $stmt = $db->prepare('INSERT INTO relatives (name, relation, parent_id) VALUES (?, ?, ?)');
    $stmt->execute([$name, $relation, $parent_id]);

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Handle form submission to search for a relative
$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $searchName = $_POST['search_name'];
    $stmt = $db->prepare('SELECT * FROM relatives WHERE name LIKE ?');
    $stmt->execute(['%' . $searchName . '%']);
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to display the family tree
function displayTree($db, $parent_id = null, $level = 0) {
    $stmt = $db->prepare('SELECT * FROM relatives WHERE parent_id IS ?');
    $stmt->execute([$parent_id]);
    $relatives = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($relatives as $relative) {
        echo str_repeat('&nbsp;', $level * 4) . htmlspecialchars($relative['name']) . ' (' . htmlspecialchars($relative['relation']) . ')<br>';
        displayTree($db, $relative['id'], $level + 1);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Family Tree</title>
</head>
<body>
    <h1>Family Tree</h1>
    <form action="" method="post">
        <h2>Add Relative</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="relation">Relation:</label>
        <input type="text" id="relation" name="relation" required>
        <label for="parent_id">Parent ID (optional):</label>
        <input type="number" id="parent_id" name="parent_id">
        <button type="submit" name="add">Add Relative</button>
    </form>

    <form action="" method="post">
        <h2>Search Relative</h2>
        <label for="search_name">Name:</label>
        <input type="text" id="search_name" name="search_name" required>
        <button type="submit" name="search">Search</button>
    </form>

    <?php if (!empty($searchResults)): ?>
        <h2>Search Results:</h2>
        <ul>
            <?php foreach ($searchResults as $result): ?>
                <li><?php echo htmlspecialchars($result['name']) . ' (' . htmlspecialchars($result['relation']) . ')'; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h2>Tree:</h2>
    <?php displayTree($db); ?>
</body>
</html>