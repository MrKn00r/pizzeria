<!DOCTYPE html>
<html lang="pl">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	crossorigin="anonymous">
	<title>Fetch Data From MySQL Database using AJAX in PHP</title>
	<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,1,-25"
    />

    <!-- BOOTSTRAP . JQUERY -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- LOCAL STYLES . SCRIPTS -->
    <script src="js/scripts.js" defer></script>
    <link href="css/style.css" rel="stylesheet" />
</head>
<style>
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	input:active {
		border: none;
	}
</style>

<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form>

<input type="number" readonly disabled id="cola" value="0" name="cola" style="border: none; appearance: none;">

<input type="number" id="pepsi" value="0" name="pepsi">


</form>
cola<button onclick="zmiendaneac()">-</button>
<button onclick="zmiendanec()">+</button>


pepsi<button onclick="zmiendaneap()">-</button>
<button onclick="zmiendanep()">+</button>


<p id="wynik" style="background-color: red;"></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="submit" name="submit">submit</button>
      </div>
    </div>
  </div>
</div>

<button id="reset">reset</button>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="ajax.js">

	</script>
<div id="data">

</div>
</body>

</html>