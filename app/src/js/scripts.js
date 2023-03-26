const menuBtn = document.querySelector('.menu-btn');
const mobileMenu = document.querySelector('.mobileMenu');
const delivery = document.querySelector('.delivery');
const slider = document.querySelector('.slider');



menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    mobileMenu.classList.toggle("active");
    delivery.classList.toggle("active");
    slider.classList.toggle("active");
    

})
