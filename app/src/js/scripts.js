const menuBtn = document.querySelector('.menu-btn');
const mobileMenu = document.querySelector('.mobileMenu');
const delivery = document.querySelector('.delivery');

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    mobileMenu.classList.toggle("active");
    delivery.classList.toggle("active");

})
