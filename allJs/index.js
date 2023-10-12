
document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;
    const slideBox = document.querySelector(".slide-wrap");
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");
    let interval;

    function showSlide(n) {
        currentSlide = (n + slides.length) % slides.length;
        const tranValue = - currentSlide * (100 / slides.length);
        slideBox.style.transform = `translateX(${tranValue}%)`;
        updateDot();
    }

    function updateDot() {
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('dotAni');
            } else {
                dot.classList.remove('dotAni');
            }
        });
    }

    function changeSlide(n) {
        showSlide(currentSlide + n);

    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });

    function startAutoSlide() {
        interval = setInterval(() => {
            changeSlide(1);
        }, 4000);
    }


    startAutoSlide(); // Bắt đầ
});
