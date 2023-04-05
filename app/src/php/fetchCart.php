<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	/* require ('conn.php'); */

	// Sprawdzenie czy udało się połączyć z bazą danych
	if (mysqli_connect_errno()) {
		die('Błąd połączenia z bazą danych: ' . mysqli_connect_error());
	}

	$sql = "SELECT * FROM zdjecia";
	$result = mysqli_query($conn, $sql);
	if (isset($_POST['cola'])) {
		$cola = $_POST['cola'];
                $qr1="INSERT INTO zdjecia (numer_zdjecia, produkt) values ($cola, 'cola') ";
                $result = $conn->query($qr1);
	}
	if (isset($_POST['pepsi'])) {
		$pepsi = $_POST['pepsi'];
                $qr2="INSERT INTO zdjecia (numer_zdjecia, produkt) values ($pepsi, 'pepsi') ";
                $result = $conn->query($qr2);
	} 


	// wyświetlenie wyników
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<p class='record' data-id='" . $row["id"] . "'>ID: " . $row["id"] . " Numer zdjęcia: " . $row["numer_zdjecia"] ."Produkt: ". $row["produkt"]."</p> <button class='delete-record' data-id='".$row['id']."' data-record-id='".$row['id']."'>Usuń</button>";
			
		}
	} else {
		echo "Brak wyników";
	}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		// Obsługa kliknięcia na przyciski "Usuń"
		$('.delete-record').click(function() {
			var recordId = $(this).data('record-id');
			/* if (confirm('Czy na pewno chcesz usunąć ten produkt?')) { */
				$.ajax({
					url: 'delete.php',
					type: 'post',
					data: {id: recordId},
					success: function(response) {
						$('p[data-id="' + recordId + '"]').remove();
					},
					error: function(xhr, status, error) {
						console.error(xhr.responseText);
					}
				});
			/* } */
		});
	});
</script>
