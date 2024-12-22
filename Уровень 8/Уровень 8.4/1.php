<?php
session_start();

if (isset($_SESSION['last_visit'])) {
    echo "Последний визит: " . $_SESSION['last_visit'];
} else {
    echo "Это ваш первый визит.";
}

$_SESSION['last_visit'] = date('Y-m-d H:i:s');
?>