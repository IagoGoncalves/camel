document.addEventListener('DOMContentLoaded', function () {
    var hamburger = document.querySelector(".hamburger");
    var mobileMenuToggle = document.querySelector(".menu-main-menu-container");

    hamburger.addEventListener("click", function() {
        mobileMenuToggle.classList.toggle("active-menu");
        hamburger.classList.toggle("cross-menu");
    });
    
    var swiper = new Swiper('.galery-per-view', {
        speed: 5000,
        slidesPerView: 3,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
              slidesPerView: 1,
            },
            1024: {
              slidesPerView: 2,
            },
          },
        // autoplay: {
        //     delay: 2500,
        // },    
    });
    
    var locale = window.location.pathname;
    if (locale === '/') {
      window.addEventListener('scroll', function () {
        if (window.scrollY > 25) {
            document.getElementById("header-menu").classList.add("internal-header");
        } else {
            document.getElementById("header-menu").classList.remove("internal-header");
        }
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
        autoplay: {
            delay: 2500,
        },    
      });

      var tagLi = document.querySelector('li.classe-a-ser-adicionada');
      if (tagLi) {
          tagLi.classList.add('nova-classe');
      }
    }

    document.querySelectorAll('.menu > li').forEach(function(li) {
      if (li.classList.contains('current-menu-item')) {
          var link = li.querySelector('a');
          if (link) {
              link.classList.add('menu-li-active');
          }
      }
  });
});