$(document).ready(() => {
  $("#submit").on("click", () => {
    let cola = $("#cola").val();
    let pepsi = $("#pepsi").val();

    $.ajax({
      url: "php/addToCart.php",
      type: "POST",
      data: {
        cola: cola,
        pepsi: pepsi,
      },
      success: () => {
        let wynik = document.getElementById("wynik");
        wynik.innerHTML = "produkty zostały dodane do koszyka";
        setTimeout(function () {
          wynik.innerHTML = "";
        }, 5000);
        console.log("submit");
      },
    });
  });
  setInterval(() => {
    $.ajax({
      type: "GET",
      url: "php/fetchCart.php",
      dataType: "html",
      success: (data) => {
        $("#data").html(data);
        /* console.log(data) */
      },
    });
  }, 1000);
  $("#reset").on("click", () => {
    $.ajax({
      type: "GET",
      url: "php/clearCart.php",
      dataType: "html",
      success: () => {
        console.log("reset");
      },
    });
  });
});
