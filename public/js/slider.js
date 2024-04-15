const slider = document.querySelector('.slider_wrapper');
const slides = slider.querySelectorAll('.slider_item');
const btnNext = document.querySelector('.btn_next');
const btnPrev = document.querySelector('.btn_prev');
const sliderMove = slider.querySelector('.slider');
let currentIndex = 0;

const slideWidth = slides[0].offsetWidth;
const slideMargin = parseInt(getComputedStyle(slides[0]).marginRight);

btnNext.addEventListener('click', (e) => {
    e.preventDefault();
    if (currentIndex < slides.length - 1) {
        currentIndex++;
        moveSlider();
    }
});

btnPrev.addEventListener('click', (e) => {
    e.preventDefault();
    if (currentIndex > 0) {
        currentIndex--;
        moveSlider();
    }
});

function moveSlider() {
    const translateXValue = -(slideWidth + slideMargin) * currentIndex;
    sliderMove.style.transform = `translateX(${translateXValue}px)`;
}
