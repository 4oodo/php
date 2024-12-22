<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['birthday'])) {
    $_SESSION['birthday'] = $_POST['birthday'];
}

if (isset($_SESSION['birthday'])) {
    $birthday = $_SESSION['birthday'];
    $today = date('m-d');

    if ($today == date('m-d', strtotime($birthday))) {
        echo "С Днём Рождения!";
    } else {
        echo "Добро пожаловать!";
    }
} else {
    echo '<form method="post">
            <label for="birthday">Введите вашу дату рождения (ГГГГ-ММ-ДД):</label>
            <input type="date" id="birthday" name="birthday" required>
            <input type="submit" value="Отправить">
          </form>';
}
?>