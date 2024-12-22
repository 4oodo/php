<?php
$commentsFile = 'comments.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])) {
    $comment = htmlspecialchars($_POST['comment']);
    file_put_contents($commentsFile, $comment . PHP_EOL, FILE_APPEND);
}

$comments = file_exists($commentsFile) ? file($commentsFile, FILE_IGNORE_NEW_LINES) : [];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница комментариев</title>
</head>
<body>
    <h1>Оставьте комментарий</h1>
    <form method="post" action="">
        <textarea name="comment" rows="4" cols="50" required></textarea><br>
        <button type="submit">Отправить</button>
    </form>

    <h2>Комментарии</h2>
    <?php if (!empty($comments)): ?>
        <ul>
            <?php foreach ($comments as $comment): ?>
                <li><?php echo $comment; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Пока нет комментариев.</p>
    <?php endif; ?>
</body>
</html>