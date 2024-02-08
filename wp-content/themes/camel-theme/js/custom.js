document.addEventListener('DOMContentLoaded', function () {
    var hamburger = document.querySelector(".hamburger");
    var mobileMenuToggle = document.querySelector(".menu-main-menu-container");

    hamburger.addEventListener("click", function() {
        mobileMenuToggle.classList.toggle("active-menu");
        hamburger.classList.toggle("cross-menu");
    });

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
        // autoplay: {
        //     delay: 2500,
        // },    
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
    window.addEventListener('scroll', function () {
        if (window.scrollY > 200) {
            document.getElementById("header-menu").classList.add("internal-header");
        } else {
            document.getElementById("header-menu").classList.remove("internal-header");
        }
    });
});