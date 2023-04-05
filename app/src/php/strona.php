<?php
require('session.php');

// Pobranie loginu użytkownika
$login = $_SESSION['login'];
$userid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Strona główna</title>
</head>

<body>
    <h1>Witaj, <?php echo $login; ?>!</h1>
    <h1>Witaj, <?php echo $userid; ?>!</h1>
    <p>To jest strona główna witryny.</p>
    <p><a href="wyloguj.php">Wyloguj</a></p>
</body>

</html>