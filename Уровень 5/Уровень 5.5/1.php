<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Array from Inputs</title>
</head>
<body>
    <?php
    $numbers = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = intval($_POST["startNumber"]);
        $end = intval($_POST["endNumber"]);
        if ($start <= $end) {
            $numbers = range($start, $end);
        }
    }
    ?>
    <form method="post">
        <label for="startNumber">Start Number:</label>
        <input type="text" id="startNumber" name="startNumber" required><br>
        <label for="endNumber">End Number:</label>
        <input type="text" id="endNumber" name="endNumber" required><br>
        <button type="submit">Generate Array</button>
    </form>
    <?php if (!empty($numbers)): ?>
        <p>Generated Array: <?php echo implode(', ', $numbers); ?></p>
    <?php endif; ?>
</body>
</html>