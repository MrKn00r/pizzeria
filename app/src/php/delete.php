<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');
/* require('conn.php'); */

if (mysqli_connect_errno()) {
	die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
}

if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM zdjecia WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo 'Rekord został usunięty z bazy danych.';
	} else {
		echo 'Wystąpił błąd podczas usuwania rekordu z bazy danych.';
	}
}
?>