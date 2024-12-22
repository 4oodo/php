<?php
function checkPasswordComplexity($password) {
    $errors = [];

    if (strlen($password) < 8) {
        $errors[] = "Пароль должен быть не менее 8 символов.";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Пароль должен содержать хотя бы одну заглавную букву.";
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Пароль должен содержать хотя бы одну строчную букву.";
    }
    if (!preg_match('/\d/', $password)) {
        $errors[] = "Пароль должен содержать хотя бы одну цифру.";
    }
    if (!preg_match('/[\W_]/', $password)) {
        $errors[] = "Пароль должен содержать хотя бы один специальный символ.";
    }

    if (empty($errors)) {
        return "Пароль надежный.";
    } else {
        return $errors;
    }
}

// Пример использования
$password = 'ExamplePassword1!';
$result = checkPasswordComplexity($password);
if (is_array($result)) {
    foreach ($result as $error) {
        echo $error . "\n";
    }
} else {
    echo $result;
}
?>