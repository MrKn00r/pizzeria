<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');
/* require('conn.php'); */

	// Sprawdzenie czy udało się połączyć z bazą danych
	if (mysqli_connect_errno()) {
		die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
	}
/* najpierw kopia koszyka */
	$sql = "TRUNCATE zdjecia";
	$result = mysqli_query($conn, $sql);