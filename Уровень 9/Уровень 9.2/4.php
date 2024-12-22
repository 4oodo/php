<?php
// Подключение к базе данных
$dbname = 'database.sqlite';

try {
    // Создание нового экземпляра PDO
    $pdo = new PDO("sqlite:$dbname");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Получение всех пользователей из базы данных
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Ошибка базы данных: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица пользователей</title>
    <style>
        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>salary</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['age']) ?></td>
            <td><?= htmlspecialchars($user['salary']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>