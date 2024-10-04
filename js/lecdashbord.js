const cretebtn = document.getElementById('popup-form');
const loginModal = document.querySelector('.popup');
const closeBtn = document.getElementById('close-btn');


function openModal() {
    loginModal.classList.add("active");
}

function closeModal() {
    loginModal.classList.remove("active");
}