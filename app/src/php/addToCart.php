<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');
/* require ('conn.php'); */

	// Sprawdzenie czy udało się połączyć z bazą danych
	if (mysqli_connect_errno()) {
		die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
	}



	if (isset($_POST['cola']) && $_POST['cola'] > 0) {
		$cola = $_POST['cola'];
        /* $cena = $cola * 5; */
                $qr1="INSERT INTO zdjecia (numer_zdjecia, produkt) values ($cola, 'cola') ";
                $result1 = $conn->query($qr1);
                echo "cola gut";
	}
	if (isset($_POST['pepsi']) && $_POST['pepsi'] > 0) {
		$pepsi = $_POST['pepsi'];
        /* $cena = $pepsi * 5; */
                $qr2="INSERT INTO zdjecia (numer_zdjecia, produkt) values ($pepsi, 'pepsi') ";
                $result2 = $conn->query($qr2);
                echo "pepsi gut";
	} 