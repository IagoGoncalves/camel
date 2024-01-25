
// Banner da pagina home
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.banner-home', {
        speed: 2000,
        loop: true,
        spaceBetween: 30,
        effect: 'fade',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 1000,
        },    
    });
});
