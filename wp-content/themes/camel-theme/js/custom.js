document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.banner-home', {
        speed: 5000,
        loop: true,
        spaceBetween: 30,
        effect: 'fade',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
              return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
          },
        autoplay: {
            delay: 2500,
        },    
    });
    var swiper = new Swiper('.galery-per-view', {
        speed: 5000,
        slidesPerView: 3,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // autoplay: {
        //     delay: 2500,
        // },    
    });

});
