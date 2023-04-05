<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pizzeria</title>
    <!-- LOCAL BOOTSTRAP -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
    
    <!-- GOOGLE FONTS -->
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
    <script src="js/ajax.js" defer></script>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="shopping-cart">
        <div class="row1">        
          <div class="shopping-cart-text">
            <p class="shopping-cart-text-content">Twój koszyk</p>
            <p class="shopping-cart-text"><!-- skrypt (x) --></p>
          </div>
          <span class="material-symbols-outlined close-cart">
            cancel
          </span>
        </div>
        

        <div id="data"></div>
        <br />
      </div>
      <div class="row del">
        <div class="col-12 delivery">
          <h3 class="text-center delivery-text">Darmowa dostawa od 50$</h3>
        </div>
      </div>

      <div class="row banner">
        <div class="col-3 col-sm-3 col-md-3 col-lg-4 logo-png">
          <!-- LOGO -->
          <img alt="logo" src="./assets/logo.png" />
        </div>
        <div class="col-7 col-sm-6 col-md-4">
          <h3 class="text-center site-name">Pizza-Risorante</h3>
        </div>
        <div class="col-2 col-sm-3 col-md-5 col-lg-4">
          <ul class="nav pcMenu">
            <li class="nav-item">
              <a class="nav-link active" href="#">Nasz sklep</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">kontakt</a>
            </li>
            <li class="nav-item material-symbols-outlined">
              <a href=""> account_circle</a>
            </li>
            <li class="nav-item material-symbols-outlined open-cart">
              shopping_cart
            </li>
          </ul>

          <div class="mobileMenu">
            <ul>
              <span class="open-cart"> Koszyk</span>
              <li><a href="#">Profil</a></li>
              <li><a href="#">Nasz sklep</a></li>
              <li><a href="#">Galeria</a></li>
              <li><a href="#">Kontakt</a></li>
            </ul>
          </div>
        </div>

        <div class="menu-btn">
          <div id="div1"></div>
          <div id="div2"></div>
          <div id="div3"></div>
        </div>
        <hr />
      </div>





















      <!-- MAIN CONTENT -->
      <div class="row">
        <div class="col-lg-6 col-md-6 aa">
          <div class="home slider">
            <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  class="d-block w-100"
                  src="./assets/vegan1.jpg"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="./assets/vegan2.jpg"
                  alt="Second slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="./assets/placeholder.jpg"
                  alt="Third slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
        
          <section id="tabs">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <nav>
                    <div
                      class="nav nav-tabs nav-fill"
                      id="nav-tab"
                      role="tablist"
                    >
                      <a
                        class="pizza-des nav-item nav-link active"
                        data-toggle="tab"
                        href="#nav-des"
                        role="tab"
                        aria-controls="nav-des"
                        aria-selected="true"
                        >Opis produktu</a
                      >
                      <a
                        class="pizza-ing nav-item nav-link"
                        data-toggle="tab"
                        href="#nav-ing"
                        role="tab"
                        aria-controls="nav-ing"
                        aria-selected="false"
                        >Składniki</a
                      >
                    </div>
                  </nav>
                  <div
                    class="tab-content py-3 px-3 px-sm-0"
                    id="nav-tabContent"
                  >
                    <div
                      class="tab-pane fade show active"
                      id="nav-des"
                      role="tabpanel"
                      aria-labelledby="nav-home-tab"
                    >
                       OPIS PRODUKTU 
                      Pizza wegańska to idealna propozycja dla osób, które
                      poszukują pysznej i zdrowej alternatywy dla tradycyjnej
                      pizzy. Zamiast sera i mięsa, na wierzchu znajdują się
                      warzywa, które dodają smaku i chrupkości. Bezglutenowe
                      ciasto i bogate w składniki odżywcze składniki sprawiają,
                      że pizza wegańska jest idealna dla każdego, kto dba o
                      swoje zdrowie i formę. Spróbuj już dziś i przekonaj się,
                      że wegańska pizza to nie tylko zdrowe, ale także pyszne
                      rozwiązanie dla twojego podniebienia!
                    </div>
                    <div
                      class="tab-pane fade"
                      id="nav-ing"
                      role="tabpanel"
                      aria-labelledby="nav-profile-tab"
                    >
                       SKŁADNIKI
                      składa się z podstawowych składników: ciasta, sosu pomidorowego, czosnku, bazylii, oregano i oczywiście oliwy. pieczarki.
                      pomidorki koktajlowe.
                      suszone pomidory.
                      cebula.
                      czosnek.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12 right" style="border: 1px solid black;">
          <h2 style="margin: 10px 0 0 0">Vegan Pizza</h2>
          <div class="reviews">
            <span class="material-symbols-outlined star"> star </span>
            <span class="material-symbols-outlined star"> star </span>
            <span class="material-symbols-outlined star"> star </span>
            <span class="material-symbols-outlined star"> star </span>
            <span class="material-symbols-outlined star"> star </span>
            <p>| 15 opinii</p>
          </div>
          <div class="souce-size">
            <p>Sos:</p>
            <form method="post">
            <div class="souce"><button type="submit">df</button>
              <label><input type="radio" name="radio" id="" value="magic">
              <img
                src="./assets/sos-pomidorowy.jpg"
                alt=""/></label><button type="submit">df</button><button type="submit">df</button>
                <label><input type="radio" name="radio" id="" value="lol">
            <img
              src="./assets/sos-czosnkowy.jpg"
              alt=""
              
            /></label><button type="submit">df</button>
            <label><input type="radio" name="radio" id="" value="brouh">
            <img
              src="./assets/oliwa-z-oliwek.jpg"
              alt=""
              
            /></label><button type="submit">df</button>
            
            </div>
            
            </form>



            
            
            <p>Rozmiar:</p>
            <div class="size">
            <img id="size-small"
              src="./assets/26.png"
              alt=""
              
            />
            <img id="size-medium"
              src="./assets/32.png"
              alt=""
              
            />
            <img id="size-mega"
              src="./assets/45.png"
              alt=""
              
            />
            <img id="size-gigant"
              src="./assets/60.png"
              alt=""
              
            />
            </div>

          </div>
          
          
          <div style="border: 1px solid blue; width: 80%; margin-top: 160px;">
            <p>Dodatki:</p>


            <div class="col-md-12">
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
             
           </div>
       
       

            <div style="display: flex; justify-content: space-around">
              <div
                style="
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  width: 20%;
                  margin: 10px 0 0 0;
                  border: 1px solid red;
                  border-radius: 50px;
                "
              >
                <p>-</p>
                <p>0</p>
                <p>+</p>
              </div>
              <div
                style="
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  width: 30%;
                  margin: 10px 0 0 0;
                  border: 1px solid black;
                  border-radius: 50px;
                "
              >
                <p>Dodaj do koszyka</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6"></div>
    </div>
    
  </body>
</html>
