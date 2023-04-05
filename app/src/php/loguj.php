<?php
session_start();
// Sprawdzamy, czy użytkownik jest już zalogowany
if (isset($_SESSION['username']) && (isset($_SESSION['id']))) {
    header('Location: strona.php');
    exit();
}
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Połączenie z bazą danych
    $conn = new mysqli('localhost', 'root', '', 'pizzeria'); //mysqli_connect

    // Zapytanie SQL w celu weryfikacji użytkownika
    $query = "SELECT id, login, password FROM users WHERE login='$login' AND password='$password'";
    // Wykonanie zapytania i pobranie wyników
    $result = $conn->query($query); //mysqli_query

    // Sprawdzenie, czy znaleziono użytkownika
    if ($row = mysqli_fetch_array($result)) { //mysqli_num_rows($result)
        // Zalogowanie użytkownika
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        header('Location: strona.php');
        $conn->close(); //mysqli_close($conn)
        
        exit;
    } else {
        // Błąd logowania
        echo "Nieprawidłowy login lub hasło";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Logowanie</title>
    <style>
        div {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div>
        <h1>Logowanie</h1>
        <form method="post" action="loguj.php">
            <label for="login">Nazwa użytkownika:</label><br>
            <input type="text" id="login" name="login">
            <br><br>
            <label for="password">Hasło:</label><br>
            <input type="password" id="password" name="password">

            <button type="submit">Zaloguj</button>
        </form>
    </div>

</body>

</html>