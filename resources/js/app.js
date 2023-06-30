import "./bootstrap";
console.log("JS Loaded");
import Swiper from 'swiper/bundle';
// var swiper = new Swiper(".clients__slider", {
//     direction: "horizontal",
//     loop: true,
//     slidesPerView: 4,
//     spaceBetween: 60,
// });


const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        reverseDirection: true,
     },
    spaceBetween: 50,
    autoHeight: true,
    slidesPerView: 4,
  });