const characteristicsList = document.querySelector('.character_list');
const characteristicBtn = document.getElementById('character');

characteristicBtn.addEventListener('click', (e) => {
    e.preventDefault();
    characteristicsList.classList.toggle('hidden');
    characteristicBtn.querySelector('.icon').classList.toggle('rotate');
    if (characteristicsList.classList.contains('hidden')) {
        characteristicBtn.querySelector('span').innerText = 'Развернуть все';
    } else {
        characteristicBtn.querySelector('span').innerText = 'Скрыть';
    }
});

const slideItems = document.querySelectorAll('.item_slide');
const productImage = document.querySelector('.product_image img');
slideItems.forEach(slide => {
    slide.addEventListener('mouseover', () => {
        const imgSrc = slide.querySelector('img').getAttribute('src');
        productImage.setAttribute('src', imgSrc);
    });
});

const slider = document.getElementById('slider');
const sliderInner = slider.querySelector('.tns_inner');
const slides = slider.querySelectorAll('.item_slide');
const prevBtn = document.querySelector('.btn_prev');
const nextBtn = document.querySelector('.btn_next');

let currentIndex = 0;
const slideWidth = slides[0].offsetHeight;

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
    }
});

nextBtn.addEventListener('click', () => {
    if (currentIndex < slides.length - 8) {
        currentIndex++;
        updateSliderPosition();
    }
});

function updateSliderPosition() {
    const newPosition = -currentIndex * slideWidth;
    sliderInner.style.transform = `translateY(${newPosition}px)`;
    prevBtn.style.display = currentIndex === 0 ? 'none' : 'block';
    nextBtn.style.display = currentIndex === slides.length - 8 ? 'none' : 'block';
}

prevBtn.style.display = 'none';
