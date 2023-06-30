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
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 2000,
    },
    speed: 400,
    spaceBetween: 30,
    autoHeight: true,
    slidesPerView: 4,
  });