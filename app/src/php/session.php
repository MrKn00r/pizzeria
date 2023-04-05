<?php
session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['login'])&&!isset($_SESSION['id'])) {
    header('Location: loguj.php');
    exit();
}



?>