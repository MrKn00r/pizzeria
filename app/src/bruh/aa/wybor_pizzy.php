<?php
// Połączenie z bazą danych
$link = mysqli_connect('localhost', 'root', '', 'pizzeria');
if (!$link) {
    die('Nie można się połączyć: ' . mysqli_connect_error());
}

// Obsługa formularza
if (isset($_POST['size'])) {
    $selectedPizza = mysqli_real_escape_string($link, $_POST['size']);

    // Wykonanie zapytania SQL
    $result = mysqli_query($link, "SELECT * FROM products WHERE size = '$selectedPizza' and product_name LIKE 'vegan%'") ;
    if (!$result) {
        die('Nieprawidłowe zapytanie: ' . mysqli_error($link));
    }

    // Pobranie wyników i wypisanie ich na ekranie
    $row = mysqli_fetch_array($result);
    $nazwa = $row["product_name"];
    
    
    // Przygotowanie odpowiedzi AJAX
    $response = $nazwa . '|';
    echo $response;

}