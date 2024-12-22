<?php
$data = [1, 2, 3, 4, 5];
$values = implode(',', $data);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Числа в инпуте</title>
</head>
<body>
    <form method="post">
        <label for="numbersInput">Числа:</label>
        <input type="text" id="numbersInput" name="numbersInput" value="<?php echo $values; ?>">
    </form>
</body>
</html>