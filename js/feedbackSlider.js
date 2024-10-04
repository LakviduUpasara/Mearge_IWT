/* Nadeeja - feedback slider js */

const items = document.querySelectorAll('.headlines li');
let current = 0;

setInterval(() => {
    const prevItem = items[current];
    prevItem.classList.remove('active');

    current = (current + 1) % items.length;

    prevItem.addEventListener
    ('transitionend', () => {
        items[current].classList.add('active');
    });
}, 3000);