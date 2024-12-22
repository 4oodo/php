<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Words Grouped by First Letter</title>
</head>
<body>
<?php
$words = ['яблоко', 'абрикос', 'банан', 'черника', 'вишня', 'клюква', 'финик', 'питайя'];

$groupedWords = [];

foreach ($words as $word) {
    $firstLetter = mb_strtolower(mb_substr($word, 0, 1));
    if (!isset($groupedWords[$firstLetter])) {
        $groupedWords[$firstLetter] = [];
    }
    $groupedWords[$firstLetter][] = $word;
}

foreach ($groupedWords as $letter => $words) {
    echo "<h2>" . mb_strtoupper($letter) . "</h2>";
    echo "<ul>";
    foreach ($words as $word) {
        echo "<li>" . htmlspecialchars($word) . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>