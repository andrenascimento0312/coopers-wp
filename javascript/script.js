/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".postsSwiper", {
        slidesPerView: 1, // Quantidade de slides por visualização em dispositivos móveis
        centeredSlides: false,
        spaceBetween: 30,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // Quando a largura da tela for maior que 768px (tamanho de tablet, por exemplo)
            768: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            // Quando a largura da tela for maior que 1024px (tamanho de desktop, por exemplo)
            1024: {
                slidesPerView: 3,
                centeredSlides: true,
            },
        }
    });
});


