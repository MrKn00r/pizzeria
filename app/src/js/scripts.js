

/* VARIABLES */
const menuBtn = document.querySelector(".menu-btn");
const mobileMenu = document.querySelector(".mobileMenu");
const delivery = document.querySelector(".delivery");
const slider = document.querySelector(".slider");
const hr = document.querySelector("hr");
const closeCart = document.querySelector(".close-cart");
const shoppingCart = document.querySelector(".shopping-cart");
const openCart = document.querySelector(".open-cart");
const mobileOpenCart = document.querySelector("span.open-cart");
const banner = document.querySelector(".banner");
const size = document.querySelector(".size img");


window.addEventListener("scroll", () => {
  if (
    window.scrollY >= banner.offsetTop &&
    !mobileMenu.classList.contains("active")
  ) {
    banner.style.opacity = "0.9";
  } else {
    banner.style.opacity = "1";
  }
});

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("active");
  mobileMenu.classList.toggle("active");
  delivery.classList.toggle("active");
  slider.classList.toggle("active");
  hr.classList.toggle("active");
  banner.classList.toggle("active");
});

closeCart.addEventListener("click", () => {
  shoppingCart.classList.remove("active");
});
mobileOpenCart.addEventListener("click", () => {
  shoppingCart.classList.add("active");
  menuBtn.classList.remove("active");
  mobileMenu.classList.remove("active");
  delivery.classList.remove("active");
  slider.classList.remove("active");
  hr.classList.remove("active");
  banner.classList.remove("active");
  console.log('git')

});
openCart.addEventListener("click", () => {
  shoppingCart.classList.add("active");
  menuBtn.classList.remove("active");
  mobileMenu.classList.remove("active");
  delivery.classList.remove("active");
  slider.classList.remove("active");
  hr.classList.remove("active");
  banner.classList.remove("active");
  console.log('git')


});
const sizeSmall = document.getElementById('size-small');
const sizeMedium = document.getElementById('size-medium');
const sizeMega = document.getElementById('size-mega');
const sizeGigant = document.getElementById('size-gigant');

sizeSmall.addEventListener('mouseover', ()=>{
  sizeSmall.src = './assets/mala.png';
});
sizeMedium.addEventListener('mouseover', ()=>{
  sizeMedium.src = './assets/srednia.png';
});
sizeMega.addEventListener('mouseover', ()=>{
  sizeMega.src = './assets/mega.png';
});
sizeGigant.addEventListener('mouseover', ()=>{
  sizeGigant.src = './assets/gigant.png';
});
sizeSmall.addEventListener('mouseout', ()=>{
  sizeSmall.src = './assets/26.png';
});
sizeMedium.addEventListener('mouseout', ()=>{
  sizeMedium.src = './assets/32.png';
});
sizeMega.addEventListener('mouseout', ()=>{
  sizeMega.src = './assets/45.png';
});
sizeGigant.addEventListener('mouseout', ()=>{
  sizeGigant.src = './assets/60.png';
});





const radio = document.getElementsByName('radio');
let pom = radio[0];/* sos pomidorowy */
let czo = radio[1];
let oli = radio[2];
pom.addEventListener('click', ()=>{
  console.log('pomidor');
  pom.value=1;/* value sosu pomidorowego */
  czo.value=0;
  oli.value=0;
  console.log(valp);
})
czo.addEventListener('click', ()=>{
  pom.value=0;
  console.log('czosnek');
})
oli.addEventListener('click', ()=>{
  console.log('oliwa z oliwek');
})




function zmiendanec() {
  let cola = document.getElementById("cola");
  let aktualna_wartosc = parseInt(cola.value);
  cola.value = aktualna_wartosc + 1;
  console.log(cola.value);
};

function zmiendaneac() {
  let cola = document.getElementById("cola");
  let aktualna_wartosc = parseInt(cola.value);
  if (aktualna_wartosc > 0) {
      cola.value = aktualna_wartosc - 1;
      console.log(cola.value);
  };
};

function zmiendanep() {
  let pepsi = document.getElementById("pepsi");
  let aktualna_wartosc = parseInt(pepsi.value);
  pepsi.value = aktualna_wartosc + 1;
  console.log(pepsi.value);
}

function zmiendaneap() {
  let pepsi = document.getElementById("pepsi");
  let aktualna_wartosc = parseInt(pepsi.value);
  if (aktualna_wartosc > 0) {
      pepsi.value = aktualna_wartosc - 1;
      console.log(pepsi.value);
  }
}