document.addEventListener('DOMContentLoaded', function() {

  const titlesSpans = document.querySelectorAll('.story__title span, .story__characters--title span, .story__place--title span, .studio__title span, .nomination__bloc span');

/* Création d'un IntersectionObserver pour la détection des titres au scroll */
/* sources : lien avec article explicatif dans intitulé du projet */
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('visible');
          } else {
              entry.target.classList.remove('visible');
          }
      });
  });

  titlesSpans.forEach(span => {
    observer.observe(span);
});

/* Mise en place du swiperJS et ses options de personnalisation du swiperJS */
/* sources : bibliothèque swiperJS */
let swiper = new Swiper(".mySwiper", {
	effect: "coverflow",
	grabcursor: true,
	centeredSlides: true,
    spaceBetween: 40,
	coverflowEffect: {
		rotate: 0,
		stretch: 0,
		depth: 0,
		modifier: 1,
        slideShadows: false,
	},
	slidesPerView: 3,
	loop: true,
	autoplay:{
		delay:2000,
	},
});

/* Mise en place du parallaxe et de ses options pour les nuages */
/* sources : https://css-tricks.com/books/greatest-css-tricks/scroll-animation/ */

window.addEventListener('scroll', function() {
    let scrollClouds = document.querySelector('.story__place--clouds');
    let topClouds = scrollClouds.offsetTop;
    let debutAnimClouds = topClouds + 500;
    let scrollY = window.scrollY;
        if (scrollY >= debutAnimClouds) {
            limitMoveCloud = Math.min(300, scrollY - debutAnimClouds);
            scrollClouds.style.transform = 'translateX(-' + limitMoveCloud + 'px)';
        }
    });
});

/* Mise en place du menu burger pour son fullscreen et animation */

const burger = document.querySelector(".menu-burger");
const main = document.getElementById("primary");
const footer = document.getElementById("colophon");
const fullmenu = document.getElementById("menu");

burger.addEventListener('click',()=>{
    burger.classList.toggle('active');
    main.classList.toggle('desactive');
    footer.classList.toggle('desactive');
    fullmenu.classList.toggle('visible');
});

        const liens = document.querySelectorAll('.link');
        liens.forEach(lien => {
                      lien.addEventListener('click' , () => {
                        main.classList.remove('desactive');
                        footer.classList.remove('desactive');
                        burger.classList.remove('active');
                        fullmenu.classList.remove('visible');
                      })
        })