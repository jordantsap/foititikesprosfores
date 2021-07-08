var slidercarousel = document.querySelector('#slidercarousel')
var carousel = new bootstrap.Carousel(slidercarousel, {
    interval: 3500,
    pause: false,
    wrap: true,
    ride: carousel,
    keyboard: true,
    touch: true
})