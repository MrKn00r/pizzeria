<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Wybór pizzy</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var size = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "wybor_pizzy.php",
                    data: {size: size},
                    success: function(data){
    var response = data.split('|');
    var nazwa = response[0];
    
    $('#wynik').html(nazwa);
},
                    error: function(error){
                        alert('error');
                        eval(error);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h1>Wybierz rozmiar pizzy:</h1>
    <input type="radio" name="size" value="small"> mala<br>
    <input type="radio" name="size" value="medium"> medium<br>
    <input type="radio" name="size" value="mega"> mega<br>
    <input type="radio" name="size" value="gigant"> gigant<br>
    <div id="wynik"></div>
</body>
</html>