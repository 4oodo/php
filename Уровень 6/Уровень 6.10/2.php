<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Table</title>
</head>
<body>
    <form method="post" action="">
        <label for="text">Введите текст:</label>
        <textarea id="text" name="text" rows="10" cols="30" required></textarea>
        <br>
        <button type="submit">Отправить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $words = preg_split('/\s+/', $text);
        $totalWords = count($words);
        $wordCounts = array_count_values($words);

        echo "<table border='1'>
            <thead>
                <tr>
                    <th>Слово</th>
                    <th>Количество</th>
                    <th>Процент</th>
                </tr>
            </thead>
            <tbody>";

        foreach ($wordCounts as $word => $count) {
            $percentage = ($count / $totalWords) * 100;
            echo "<tr>
                <td>" . htmlspecialchars($word) . "</td>
                <td>{$count}</td>
                <td>" . number_format($percentage, 2) . "%</td>
            </tr>";
        }

        echo "</tbody>
        </table>";
    }
    ?>
</body>
</html>